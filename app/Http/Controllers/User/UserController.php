<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Traits\Fonnte;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class UserController extends Controller
{
    use Fonnte;
    public function __construct()
    {
        $this->middleware('guest', [
            'except' => [
                'logout',
                'verifyEmailProcess',
                'verifyEmailSuccess',
                'verifyEmail',
                'sendEmailVerification',
                'resendEmailVerification'
            ]
        ]);
    }

    public function sendEmailVerification()
    {
        try {
            $user = auth()->user();

            // if (RateLimiter::tooManyAttempts(auth()->user()->email, 3)){
            //     $seconds = RateLimiter::availableIn(auth()->user()->email);
            //     $second  = $seconds <= 60 ? $seconds.' detik' : ceil($seconds/60).' menit';
            //     return 'Anda sudah melakukan 6 kali percobaan silahkan tunggu '.$second.' lagi untuk mencoba kirim kembali';
            // }

            $token = Crypt::encrypt($user->password);

            $actionLink = route('user.verification.process', $token);
            $body = 'Silahkan Verifikasi Email anda dari website <strong>Finval</strong> akun dengan email <strong>'.$user->email.'</strong>, Verifikasi Email anda dengan mengklik link berikut';

            // RateLimiter::hit($user->email, 1800);

            Mail::send('email.email-verification', compact('body', 'actionLink'), function($message) use ($user) {
                // $message->from('finval@gmail.com');
                $message->to($user->email)
                        ->subject('Verifikasi Email');
            });

            RateLimiter::clear($user->email);

            return true;
        } catch (\Throwable $e) {
            return $e->getMessage();
        }
    }

    public function verifyEmailProcess($token)
    {
        $user            = auth()->user();
        $token_decrypted = Crypt::decryptString($token);

        if (explode('"', $token_decrypted)[1] != $user->password){
            return redirect()->route('user.verification')->with('error', 'Token tidak valid');
        }

        $user = User::findOrFail(auth()->user()->id);
        $user->update([
            "email_verified_at" => Date('Y-m-d'),
        ]);

        return redirect()->route('user.profile')->with('success','Anda Berhasil Masuk');
    }

    public function resendEmailVerification()
    {

        $is_send_email = $this->sendEmailVerification();

        if (gettype($is_send_email) == 'string'){
            $type    = 'error';
            $message = $is_send_email;
        }else {
            $type    = 'success';
            $message = 'Berhasil kirim email verifikasi';
        }

        $this->sendEmailVerification();
        return redirect()->route('user.verification')->with($type, $message);
    }

    public function verifyEmail()
    {
        return view('pages.user.email-verification');
    }

    public function index()
    {
        return view('front.login');
    }

    public function login(Request $request)
    {
        $phone = $request->nomor;
        if (Str::startsWith($phone, '0')) {
            $phone = '62' . substr($phone, 1);
        }
        $messages = [
            'nomor.required' => 'Nomor Harus Diisi Dengan Benar',
            'nomor.string' => 'Nomor Harus String',
            'password.required' => 'Password Wajib Diisi',
            'password.min' => 'Password Minimal :min Angka/Huruf' 
        ];
        $request->validate([
            'nomor' => 'required|string',
            'password' => 'required|min:8'
        ],$messages);

    $infologin = [
        'nomor' => $phone,
        'password' => $request->password
    ];

    $user = User::where('nomor',$phone)->first();

    if($user->active == 0){
         return redirect()->route('user.activication')->with('gagal','Kamu Harus Mengisi Kode OTP Yang Dikirim');
    }
    if (Auth::attempt($infologin)) {
        // if(auth()->user()->role == 'user'){
        //     $request->session()->regenerate();
        //     $messages = "Yey Kamu Berhasil Login Apa Yang Kamu Mau Lanjutkan ?";

        //     $this->send_message($phone,$messages);
        //     return redirect()->route('user.dashboard')->with('success','Yey Berhasil Login');
        // }else{ 
        //     return back()->withErrors([
        //         'nomor' => 'Kamu Bukan User'
        //     ])->onlyInput('nomor');
        // }
        if(auth()->user()->role == 'user'){
            $request->session()->regenerate();
            return redirect()->route('user.dashboard');
        }else{
            return back()->withErrors([
                'nomor' => 'Kamu Bukan User'
            ])->onlyInput('nomor');
        }
    }
    return back()->withErrors([
        'nomor' => 'Nomor Anda Salah / Sudah Di Pakai',
        'password' => 'Password Salah'
    ])->onlyInput('nomor','password');
    }

    public function show()
    {
        return view('front.register');
    }

    public function register(Request $request)
    {
    $phone = $request->nomor;
    if (Str::startsWith($phone, '0')) {
        $phone = '62' . substr($phone, 1);
    }
    $existingUser = User::where('nomor', $phone)->first();
    if ($existingUser) {
        return redirect()->back()->withErrors(['nomor' => 'Nomor Sudah Di Pake Maybe']);
    }
        // dd($request->all());
    $messages = [
        'name.required' => 'Nama Lengkap Harus Diisi',
        'name.min' => 'Apakah Ini Nama Lengkap Dengan :min Doang?',
        'name.max' => 'Waduh Wir Nama Mu Panjang Amat',
        'name.string' => 'Nama Itu Harus Alfabet',
        'nomor.required' => 'Nomor Harus Diisi Dengan Benar',
        'nomor.unique' => 'Nomor Sudah Di Pake Maybe',
        'jenis_kelamin.required' => 'Jenis Kelamin Kamu Harus Diisi',
        'tanggal_lahir.required' => 'Tanggal Lahir Kamu Berapa?',
        'password.required' => 'Password Wajib Diisi',
        'password.same:password_again' => 'Password Harus Sama Dengan Confirm Password',
        'password_again.required' => 'Woi Isi Confirmasi Passwordnya',
        'password.min' => 'Password Minimal :min Angka/Huruf' 
    ];
    $data = $request->validate([
        'name' => 'required|min:3|max:255|string',
        'nomor' => 'required|min:10|unique:users,nomor',
        'jenis_kelamin' => 'required|string',
        'tanggal_lahir' => 'required|date',
        'password'       => 'required|min:6|same:password_again',
        'password_again' => 'required'
    ],$messages);

    $data['password'] = bcrypt($request->password);
    $data['token'] = rand(111111,999999);
    $data['nomor'] = $phone;
    
    $user = User::create($data);

    $messages = "Verivication ur Account $user->token";

    $this->send_message($user->nomor,$messages);
    
    // auth()->login($user);
    // $this->sendEmailVerification();

    return redirect()->route('user.activication')->with('verif','Kami Sudah Mengirim Kode OTP Silahkan Cek Nomor Whatshap Anda');
    }

    public function activication()
    {
        return view('front.token');
    }

    public function activication_process(Request $request)
    {
        $user = User::where('token',$request->token)->first();

        if($user){
            $user->update([
                'active' => 1
            ]);
            return redirect()->route('user.index')->with('success' ,'Yey Token Berhasil Di Masukkan');
        }
        return redirect()->back()->with('error','Token Tidak Sesuai');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('user.index')->with('success', 'Berhasil logout');
    }
}

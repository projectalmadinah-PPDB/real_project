<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Traits\fonnte;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    use fonnte;
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
        return view('pages.user.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ],
    [
        'email.required' => 'email Wajib Diisi',
        'password.required' => 'Password Wajib Diisi'
    ]);

    $infologin = [
        'email' => $request->email,
        'password' => $request->password
    ];
    $user = User::where('email',$request->email)->first();

            if($user->active == 0){
                return redirect()->route('activication');
            }

    if (Auth::attempt($infologin)) {
        if(auth()->user()->role == 'user'){
            $request->session()->regenerate();
            return redirect()->route('user.profile');
        }else{ 
            return back()->withErrors([
                'email' => 'Kamu Bukan User'
            ])->onlyInput('email');
        }
    }
    return back()->withErrors([
        'email' => 'Email Anda Salah / Sudah Di Pakai',
        'password' => 'Password Salah'
    ])->onlyInput('email','password');
    }

    public function show()
    {
        return view('pages.user.register');
    }

    public function register(Request $request)
    {
        // dd($request->all());
    $data = $request->validate([
        'name' => 'required|min:3|max:255|string',
        'email' => 'required|email|unique:users',
        'nomor' => 'required|min:10',
        'jenis_kelamin' => 'required|string',
        'tanggal_lahir' => 'required|date',
        'password'       => 'required|min:6|same:password_again',
        'password_again' => 'required'
    ]);

    $data['password'] = bcrypt($request->password);
    // $data['token'] = rand(111111,999999);

    $user = User::create($data);

    // $messages = "Verivication ur Account $user->token";

    // $this->send_message($user->nomor,$messages);

    auth()->login($user);
    $this->sendEmailVerification();

    return redirect()->route('user.verification');
    }

    // public function activication()
    // {
    //     return view('pages.auth.activication');
    // }

    // public function activication_process(Request $request)
    // {
    //     $user = User::where('token',$request->token)->first();

    //     if($user){
    //         $user->update([
    //             'active' => 1
    //         ]);
    //         return redirect()->route('login');
    //     }
    //     return redirect()->back()->with('error','Token Tidak Sesuai');
    // }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('user.index')->with('success', 'Berhasil logout');
    }
}

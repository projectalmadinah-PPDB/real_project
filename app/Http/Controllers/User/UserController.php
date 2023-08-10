<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('pages.user.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'nomor' => 'required|max:14|min:10',
            'password' => 'required|min:6'
        ],
    [
        'nomor.required' => 'Nomor Wajib Diisi',
        'password.required' => 'Password Wajib Diisi'
    ]);

    $infologin = [
        'nomor' => $request->nomor,
        'password' => $request->password
    ];

    if (Auth::attempt($infologin)) {
        if(auth()->user()->role == 'user'){
            $request->session()->regenerate();
            return redirect()->route('user.profile');
        }else{
            return back()->withErrors([
                'nomor' => 'Kamu Bukan Admin'
            ])->onlyInput('nomor');
        }
    }
    return back()->withErrors([
        'nomor' => 'Nomor Hp Anda Salah / Sudah Di Pakai',
        'password' => 'Password Salah'
    ])->onlyInput('nomor','password');
    }

    public function show()
    {
        return view('pages.user.register');
    }

    public function register(Request $request)
    {

        $data = $request->validate([
            'name' => 'required|min:3|max:255|string',
            'email' => 'required|email',
            'nomor' => 'required|min:10',
            'jenis_kelamin' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'password'       => 'required|min:6|same:password_again',
            'password_again' => 'required'
        ]);

        $user = User::create($data);

        try{
            Auth::login($user);
            return redirect()->route('user.index');
        }catch (\Throwable $th){
            throw $th;
            return redirect()->withInput();
        }
        return back()->withInput();
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('user.index')->with('success', 'Berhasil logout');
    }
}

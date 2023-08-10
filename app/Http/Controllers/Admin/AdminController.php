<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('pages.admin.login');
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

    if (Auth::attempt($infologin)) {
        if(auth()->user()->role == 'admin'){
            $request->session()->regenerate();
            return redirect()->route('admin.admin.dashboard');
        }else{
            return back()->withErrors([
                'email' => 'Kamu Bukan Admin'
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
        return view('pages.admin.register');
    }

    public function register(Request $request)
    {

        $data = $request->validate([
            'name' => 'required|min:3|max:255|string',
            'email' => 'required|email',
            'nomor' => 'required|min:10',
            'jenis_kelamin' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'password' => 'required|min:8',
        ]);

        $user = User::create($data);

        try{
            Auth::login($user);
            return redirect()->route('admin.index');
        }catch (\Throwable $th){
            throw $th;
            return redirect()->withInput();
        }
        return back()->withInput();
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.index')->with('success', 'Berhasil logout');
    }
}

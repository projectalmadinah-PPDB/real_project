<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $users = Auth::user()->id;
        $user = User::with('student')->findOrFail($users);
        $informasi = Article::all();
        return view('front.dashboard.index',compact('user','informasi'));
    }

    public function profile()
    {
        $users = Auth::user()->id;
        $user = User::with('parents')->findOrFail($users);
        return view('front.dashboard.profile',compact('user'));
    }

    public function informasi()
    {
        $article = Article::all();
        return view('front.dashboard.informasi',compact('article'));
    }
}

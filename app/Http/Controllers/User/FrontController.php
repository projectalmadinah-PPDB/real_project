<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Pendaftaran;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
    public function index()
    {
        $article = Article::all();
        return view('front.index',compact('article'));
    }

    public function informasi()
    {
        $article = Article::all();
        return view('front.artile',compact('article'));
    }

    public function detail_informasi($slug)
    {
        $articles = Article::where('slug', $slug)->firstOrFail();
        $article = Article::all();
        return view('front.detail_article', compact('articles','article'));
    
    }

    public function about()
    {
        return view('front.about');
    }

    public function kelengkapan(Request $request)
    {
        $validate = $request->validate([
            'nik' => 'required|integer',
            'nama_ayah' => 'required',
            'no_ayah' => 'required',
            'nama_ibu' => 'required',
            'no_ibu' => 'required',
            'alamat' => 'required'
        ]);
        $validate['user_id'] = Auth::user()->id;
        $user = Pendaftaran::create($validate);

        return redirect()->route('user.profile')->with('success','Berhasil Melengkapi Data');
    }
}

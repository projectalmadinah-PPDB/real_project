<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $article = Article::all();
        return view('front.index',compact('article'));
    }
}

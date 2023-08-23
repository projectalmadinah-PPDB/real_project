<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Document;
use App\Models\Pendaftaran;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::all();
        $pendaftaran = Pendaftaran::all();
        $document = Document::all();
        $informasi = Article::all();
        return view('pages.admin.dashboard.index',compact('users','informasi','pendaftaran','document'));
    }
}

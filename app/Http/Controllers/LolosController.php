<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LolosController extends Controller
{
    public function index()
    {
        return view('pages.admin.dashboard.lolos.index');
    }
}

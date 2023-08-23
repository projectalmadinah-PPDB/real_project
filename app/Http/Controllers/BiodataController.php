<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Pendaftaran;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BiodataController extends Controller
{
    public function index()
    {
        $users = User::where('role','user')->orderBy('id','desc')->with('pendaftaran','document')->get();
        return view('pages.admin.dashboard.biodata.index',compact('users'));
    }

    public function show($id){
        $pendaftaran = Pendaftaran::with('user')->findOrFail($id);

        return view('pages.admin.dashboard.biodata.show',compact('pendaftaran'));
    }

    public function show_document($id)
    {
        $document = Document::with('user')->findOrFail($id);
        return view('pages.admin.dashboard.biodata.show_document',compact('document'));
    }

    public function edit($id)
    {
        $biodata = User::findOrFail($id);
        return view('pages.admin.dashboard.biodata.edit',compact('biodata'));
    }

    public function create()
    {
        return view('pages.admin.dashboard.biodata.create');
    }

    public function destroy($id)
    {     
        // Hapus user
        $user = User::findOrFail($id);

        $user->document()->delete();
        
        $user->pendaftaran()->delete();

        $user->delete();

        return redirect()->route('admin.pendaftaran.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Pendaftaran;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BiodataController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('search')){
            $users = User::where('role','user')->where('name','LIKE','%'.$request->search.'%')->paginate(5);
        }
        else{
            $users = User::where('role','user')->orderBy('id','desc')->with('pendaftaran','document')->paginate(5);
        }
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
        $biodata = User::with('pendaftaran','document')->findOrFail($id);
        return view('pages.admin.dashboard.biodata.edit',compact('biodata'));
    }

    public function update(Request $request,$id)
    {
        $user = User::find($id);
        $pendaftaran = $user->pendaftaran; // Tidak perlu tanda kurung

        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|unique:users,email,' . $user->id,
            'nomor' => 'required|unique:users,nomor,' . $user->id,
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
        ]);

        $user->update($data);

        $pendaftaranData = $request->validate([
            'nama_ayah' => 'required|string',
            'no_ayah' => 'required',
            'nama_ibu' => 'required|string',
            'no_ibu' => 'required',
            'alamat' => 'required'
        ]);

        $pendaftaran->update($pendaftaranData);
        $document = $user->document;
        // Update document files if uploaded
        if ($request->hasFile('kk')) {
            $kkFile = $request->file('kk');
            $kkFileName = time() . '_kk_' . $kkFile->getClientOriginalName();
            $kkFile->storeAs('public/pdf', $kkFileName);
            $document->kk = 'pdf/' . $kkFileName;
        }
        if ($request->hasFile('ijazah')) {
            $ijazahFile = $request->file('ijazah');
            $ijazahFileName = time() . '_ijazah_' . $ijazahFile->getClientOriginalName();
            $ijazahFile->storeAs('public/pdf', $ijazahFileName);
            $document->ijazah = 'pdf/' . $ijazahFileName;
        }
        if ($request->hasFile('akta')) {
            $aktaFile = $request->file('akta');
            $aktaFileName = time() . '_akta_' . $aktaFile->getClientOriginalName();
            $aktaFile->storeAs('public/pdf', $aktaFileName);
            $document->akta = 'pdf/' . $aktaFileName;
        }
        $document->save();


        return redirect()->route('admin.biodata.index')->with('success', 'Profile berhasil diupdate.');
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

        return redirect()->route('admin.biodata.index');
    }
}

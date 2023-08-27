<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Pendaftaran;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->has('search')){
            $data = User::where('name','LIKE','%'.$request->search.'%')->paginate(5);
        }
        else{
            $data = User::orderBy('id','desc')->with('pendaftaran','document')->where('role','user')->whereHas('pendaftaran')->paginate(5);
        }
        return view('pages.admin.dashboard.data.index',compact('data'));
    }

    public function edit($id)
    {
        $data = User::with('pendaftaran','document')->findOrFail($id);

        return view('pages.admin.dashboard.data.edit',compact('data'));
    }

    public function update(Request $request,$id)
    {
        $user = User::find($id);
        $pendaftaran = $user->pendaftaran; // Tidak perlu tanda kurung

        $data = $request->validate([
            'name' => 'required|string',
            'nomor' => 'required|unique:users,nomor,' . $user->id,
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
        ]);

        $user->update($data);

        $pendaftaranData = $request->validate([
            'nik' => 'required',
            'nama_ayah' => 'required|string',
            'no_ayah' => 'required',
            'nama_ibu' => 'required|string',
            'no_ibu' => 'required',
            'alamat' => 'required',
            'status' =>'required'
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


        return redirect()->route('admin.pendaftaran.index')->with('success', 'Profile berhasil diupdate.');
    }

}

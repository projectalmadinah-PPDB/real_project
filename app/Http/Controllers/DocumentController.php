<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->has('search')){
            $document = Document::where('title','LIKE','%'.$request->search.'%')->paginate(5);
        }
        else{
            $document = Document::orderBy('id', 'desc')->paginate(5);
        }
        return view('pages.admin.dashboard.documents.index',compact('document'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.dashboard.documents.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kk' => 'required|mimes:pdf|max:2048', // Kartu Keluarga
            'ijazah' => 'required|mimes:pdf|max:2048', // Ijazah
            'akta' => 'required|mimes:pdf|max:2048', // Akta
        ]);
    
        if ($request->hasFile('kk') && $request->hasFile('ijazah') && $request->hasFile('akta')) {
            $kkFile = $request->file('kk');
            $ijazahFile = $request->file('ijazah');
            $aktaFile = $request->file('akta');
    
            $kkFileName = time() . '_kk_' . $kkFile->getClientOriginalName();
            $ijazahFileName = time() . '_ijazah_' . $ijazahFile->getClientOriginalName();
            $aktaFileName = time() . '_akta_' . $aktaFile->getClientOriginalName();
    
            $kkFile->storeAs('public/pdf', $kkFileName);
            $ijazahFile->storeAs('public/pdf', $ijazahFileName);
            $aktaFile->storeAs('public/pdf', $aktaFileName);
    
            // Proses penyimpanan informasi ke database
            $data = [
                'kk' => 'pdf/' . $kkFileName,
                'ijazah' => 'pdf/' . $ijazahFileName,
                'akta' => 'pdf/' . $aktaFileName,
            ];
            
            $data['user_id'] = Auth::user()->id;
            
            Document::create($data);
    
            return redirect()->back()->with('success', 'Files berhasil diunggah.');
        }
    
        return redirect()->back()->with('error', 'Gagal mengunggah files.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $document = Document::find($id);
        return view('pages.admin.dashboard.documents.show', compact('document'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Document $document)
    {
        return view('pages.admin.dashboard.documents.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Document $document)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Document $document)
    {
        //
    }
}

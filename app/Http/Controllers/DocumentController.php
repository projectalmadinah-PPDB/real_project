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
        $data = $request->validate([
            'file_pdf.*' => 'required|mimes:pdf|max:2048', // Maksimal 2 MB per file
        ]);
        
        if ($request->hasFile('file_pdf')) {
            foreach ($request->file('file_pdf') as $pdfFile) {
                $path = public_path('assets/pdf'); // Path absolut ke direktori "public/assets/pdf"
                $fileName = time() . '_' . $pdfFile->getClientOriginalName();
                $pdfFile->move($path, $fileName);
    
                // Proses penyimpanan informasi ke database jika diperlukan
        }
        $user = Auth::user();
        $data = Document::create([
            'file_pdf' => 'assets/pdf/' . $fileName,
            'user_id' => $user->id
        ]);
    }
        return redirect()->route('admin.document.index')->with('success', 'File PDF berhasil diunggah.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Document $document)
    {
        return view('pages.admin.dashboard.documents.show');
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

<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $article = Article::orderBy('id', 'desc')->get();
        return view('pages.admin.dashboard.articles.index',compact('article'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.dashboard.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'image' => 'required',
            'desc' => 'required',
        ],
    [
        'title.required' => 'Title Wajib Diisi',
        'desc.required' => 'Description Wajib Diisi',
        'image.required' => 'Image Wajib Diisi'
    ]);
        $data['slug'] = Str::slug($request->title);
        $data['user_id'] = Auth::user()->id;

        $image = $request->file('image')->store('assets' , 'public');
        $data['image'] = $image;


        Article::create($data);
        return redirect()->route('admin.article.index')->with('create' , 'Article Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        $article = Article::firstOrFail();
        return view('pages.admin.dashboard.articles.show',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        return view('pages.admin.dashboard.articles.edit',compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article,$id)
    {
        $article = Article::findOrFail($id);
        
        $data = $request->validate([
            'title' => 'required|string',
            'image' => '',
            'desc' => 'required',
        ],
        [
            'title.required' => 'Title Wajib Diisi',
            'desc.required' => 'Description Wajib Diisi',
        ]);
        $data['slug'] = Str::slug($request->title);
        if($request->image){
            $image = $request->file('image')->store('assets' , 'public');
            $data['image'] = $image;
            
        }else{
            $article->image;
        }
        
        $article->update($data);
        
        return redirect()->route('admin.article.index' , compact('id'))->with('update' , 'Artikel Berhasil Di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article,$id)
    {
        $post = Article::findOrFail($id);

    // Hapus data post
    $post->delete();

    return redirect()->route('admin.article.index',compact('post'))->with('delete', 'Artickel Berhasil Di Hapus');
    }
}
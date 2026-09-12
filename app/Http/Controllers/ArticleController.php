<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Article::all();
        return view('article.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'image'   => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'title'   => 'required|min:3',
            'content' => 'required|min:10'
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('articles', 'public');
            $validated['image'] = $path;
        }

        Article::create($validated);

        return redirect('/articles')->with('success', 'Artikel berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $validated = $request->validate([
            'image'   => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:3000',
            'title'   => 'required|min:3',
            'content' => 'required|min:10'
        ]);

        // Cek jika ada gambar baru yang diunggah
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada di storage
            if ($article->image) {
                Storage::disk('public')->delete($article->image);
            }

            // Simpan gambar baru
            $validated['image'] = $request->file('image')->store('articles', 'public');
        }

        $article->update($validated);

        return redirect('/articles')->with('success', 'Artikel berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        // Hapus file gambar dari storage
        if ($article->image) {
            Storage::disk('public')->delete($article->image);
        }

        // Hapus record dari database
        $article->delete();

        return redirect('/articles')->with('success', 'Artikel berhasil dihapus!');
    }
}

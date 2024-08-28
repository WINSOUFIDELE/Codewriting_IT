<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'libelle' => 'required|max:255',
            'prix_achat' => 'required|numeric',
            'prix_vente' => 'required|numeric',
            'description' => 'nullable',
            'observation' => 'nullable',
        ]);
    
        Article::create($validated);
        return redirect()->route('articles.index')->with('success', 'Article ajouté avec succès');
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.show', compact('article'));
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }

    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());

        return redirect()->route('articles.index')->with('success', 'Article mis à jour avec succès');
    }

    public function destroy($id)
    {
        Article::destroy($id);
        return redirect()->route('articles.index')->with('success', 'Article supprimé avec succès');
    }
}

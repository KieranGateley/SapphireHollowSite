<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{

    public function index() {
        return view('pages.article.table', ['article' => Article::all()]);
    }

    public function create() {
        return view('pages.article.create');
    }

    public function store(Request $request) {
        $article = Article::create([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
            'user_id' => Auth::user()->id,
        ]);
        return redirect()->route('view_article', ['article' => $article]);
    }

    public function show(Article $article) {
        return view('pages.article.view', ['article' => $article]);
    }

    public function edit(Article $article) {
        return view('pages.article.edit', ['article' => $article]);
    }

    public function update(Request $request, Article $article) {
        $article->update([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
            'user_id' => Auth::user()->id,
        ]);
        return redirect()->route('view_article', ['article' => $article]);
    }

    public function destroy(Article $article) {
        $article->delete();
    }
}

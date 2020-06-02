<?php

namespace App\Http\Controllers;

use App\Article;
use App\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{

    public function index() {
        return view('pages.article.table', ['article' => Article::all()]);
    }

    public function create() {
        $perm = UserRole::CREATE_ARTICLE;
        if (!Auth::user()->role->$$perm) { return redirect('home'); }
        return view('pages.article.create');
    }

    public function store(Request $request) {
        $perm = UserRole::CREATE_ARTICLE;
        if (!Auth::user()->role->$$perm) { return redirect('home'); }
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
        $permOther = UserRole::MANAGE_OTHER_ARTICLE;
        $permOwn = UserRole::MANAGE_OWN_ARTICLE;
        $role = Auth::user()->role;
        if ($role->$permOther || ($role->$permOwn && $article->author == Auth::id())) {
            return view('pages.article.edit', ['article' => $article]);
        }
        return redirect('home');
    }

    public function update(Request $request, Article $article) {
        $permOther = UserRole::MANAGE_OTHER_ARTICLE;
        $permOwn = UserRole::MANAGE_OWN_ARTICLE;
        $role = Auth::user()->role;
        if ($role->$permOther || ($role->$permOwn && $article->author == Auth::id())) {
            $article->update([
                'title' => $request->input('title'),
                'body' => $request->input('body'),
                'user_id' => Auth::user()->id,
            ]);
            return redirect()->route('view_article', ['article' => $article]);
        }
        return redirect('home');
    }

    public function destroy(Article $article) {
        $permOther = UserRole::MANAGE_OTHER_ARTICLE;
        $permOwn = UserRole::MANAGE_OWN_ARTICLE;
        $role = Auth::user()->role;
        if ($role->$permOther || ($role->$permOwn && $article->author == Auth::id())) {
            $article->delete();
        }
        return redirect('home');
    }
}

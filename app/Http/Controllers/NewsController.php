<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{

    public function index() {
        return view('pages.news.table');
    }

    public function create() {
        return view('pages.news.create');
    }

    public function store(Request $request) {
        $news = News::create([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
            'user_id' => Auth::user()->id,
        ]);
        return redirect()->route('view_news', ['news' => $news]);
    }

    public function show(News $news) {
        return view('pages.news.view', ['news' => $news]);
    }

    public function edit(News $news) {
        return view('pages.news.edit', ['news' => $news]);
    }

    public function update(Request $request, News $news) {
        $news->update([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
            'user_id' => Auth::user()->id,
        ]);
        return redirect()->route('view_news', ['news' => $news]);
    }

    public function destroy(News $news) {
        $news->delete();
    }
}

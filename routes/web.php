<?php

use App\Article;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'verified'], function () {
    Route::get('/articles', 'ArticleController@index')->name('all_articles');
    Route::get('/articles/new', 'ArticleController@create')->name('create_article');
    Route::post('/articles/new', 'ArticleController@store')->name('create_article');
    Route::get('/articles/{article}/edit', 'ArticleController@edit')->name('edit_article');
    Route::post('/articles/{article}/edit', 'ArticleController@update')->name('edit_article');
});

Route::get('/profile', function () { return view('pages.user.profile'); })->name('profile')->middleware('auth');
Route::get('/', function () { return view('pages.home', ['articles' => Article::all(),]); })->name('home');
Route::get('/articles/{article}', 'ArticleController@show')->name('view_article');

Auth::routes(['verify' => true, ]);


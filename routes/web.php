<?php

use App\News;
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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/news', 'NewsController@index')->name('all_news');
    Route::get('/news/new', 'NewsController@create')->name('create_news');
    Route::post('/news/new', 'NewsController@store')->name('create_news');
    Route::get('/news/{news}/edit', 'NewsController@edit')->name('edit_news');
    Route::post('/news/{news}/edit', 'NewsController@update')->name('edit_news');
});

Route::get('/', function () { return view('pages.home', ['news' => News::all(),]); })->name('home');
Route::get('/news/{news}', 'NewsController@show')->name('view_news');

Auth::routes();


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\PostController;

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

Route::get('/', function () {
    return view('top');
});

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/drafts/new', 'App\Http\Controllers\Auth\PostController@index')->name('drafts.new');

Route::get('/', [PostController::class, 'index']);

// 記事を投稿する時、postリクエストを送る
Route::post('/drafts/new', 'App\Http\Controllers\Auth\PostController@postArticle')->name('drafts.new.posts');

Route::get('/', [PostController::class, 'postArticle']);

// 実際に投稿された記事の内容を表示
Route::get('/drafts/{id}', 'App\Http\Controllers\Auth\PostController@showArticle')->name('item');

Route::get('/', [PostController::class, 'showArticle']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

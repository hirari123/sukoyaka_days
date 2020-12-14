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

// トップページを表示
Route::get('/', 'App\Http\Controllers\Auth\PostController@showTopPage')->name('top');

// Route::get('/', [PostController::class, 'showTopPage']);


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/drafts/new', 'App\Http\Controllers\Auth\PostController@index')->name('drafts.new');

Route::get('/', [PostController::class, 'index'])->name('drafts.new');

// 記事を投稿する時、postリクエストを送る
Route::post('/drafts/new', 'App\Http\Controllers\Auth\PostController@postArticle')->name('drafts.new.posts');

Route::get('/', [PostController::class, 'postArticle'])->name('drafts.new.posts');

// 実際に投稿された記事の内容を表示
Route::get('/drafts/{id}', 'App\Http\Controllers\Auth\PostController@showArticle')->name('item');

Route::get('/drafts/{id}', [PostController::class, 'showArticle'])->name('item');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Http\Controllers\Auth\RegisterController;

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
    return view('welcome');
});
Route::get('/movie', function () {
    return view('movie/movie');
});

Route::get('/auth/verifyemail/{token}', 'Auth\RegisterController@verify');
Auth::routes();
Route::get('/resend', 'Auth\RegisterController@showReSendForm')->name('resend');
Route::post('/resend', 'Auth\RegisterController@reSend');

// 画像投稿をコントローラーに送信
Route::post('/new_movies_send', 'UploadController@saveimg');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

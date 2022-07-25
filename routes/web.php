<?php

use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

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
Route::get('/video', function () {
    return view('video/video');
});

Route::get('/auth/verifyemail/{token}', [RegisterController::class, 'verify']);
Auth::routes();
Route::get('/resend', [RegisterController::class, 'showReSendForm'])->name('resend');
Route::post('/resend', [RegisterController::class, 'reSend']);

// 画像投稿をコントローラーに送信
Route::post('/new_movies_send', [UploadController::class, 'saveimg']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ポートフォリオ（西潟）接続
Route::get('/portfolio_nishigata', function () {
    return view('add/portfolio_nishigata');
});

// ポートフォリオ（工藤）接続
Route::get('/portfolio_kudou', function () {
    return view('add/portfolio_kudou');
});
// ポートフォリオ補足説明(西潟)接続
Route::get('/atioa_poroslgtnihfi', function () {
    return view('add/portfolio_ura_nisigata');
});

// 動画アップロードページ接続
Route::get('/upload', function () {
    return view('video/upload');
});

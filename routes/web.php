<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CheckBoxController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RandomPath;
use App\Http\Controllers\Search\SearchChannelController;
use App\Http\Controllers\Search\SearchRandomChannelController;
use App\Http\Controllers\Search\SearchRandomPathController;
use App\Http\Controllers\Search\SearchVideoController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\VideoLinkController;
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

// メイン画面
Route::get('/', [RandomPath::class, 'random']);

// 動画再生画面
Route::get('/video/{id}', [VideoLinkController::class, 'getPath']);

// ユーザー登録関係
Route::get('/auth/verifyemail/{token}', [RegisterController::class, 'verify']);
Auth::routes();
Route::get('/resend', [RegisterController::class, 'showReSendForm'])->name('resend');
Route::post('/resend', [RegisterController::class, 'reSend']);

// 画像投稿をコントローラーに送信
Route::post('/new_send', [UploadController::class, 'saveimg']);

// 各ユーザーのホームページ画面
Route::get('/home/{name}', [HomeController::class, 'path']);

// チェックボックスの内容をコントローラーから取得
Route::get('/upload', [CheckBoxController::class, 'showValue']);

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
    return view('add/portfolio_ura_nishigata');
});

// 動画検索ページの表示
Route::get('/search/video/name', [SearchVideoController::class, 'search'])->name('search.video');
Route::get('/search/video', [SearchRandomPathController::class, 'path']);

// ユーザー検(チャンネル)検索ページの表示
Route::get('/search/channel', [SearchRandomChannelController::class, 'index']);
Route::get('/search/channel/name', [SearchChannelController::class, 'search'])->name('search.channel');


// テスト用ページ呼び出し
Route::get('/test', [TestController::class, 'index']);

// パスワード変更画面
Route::get('/pw_edit', function () {
    return view('edit/password_edit');
});
Route::get('/intro_edit', function () {
    return view('edit.introduction_edit');
});

// 投稿動画変更画面
Route::get('/video_edit', function () {
    return view('video/video_edit');
});

// マイリスト画面
Route::get('/my_list', function () {
    return view('video/my_list');
});

<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileEditController;
use App\Http\Controllers\Random\RandomPath;
use App\Http\Controllers\Random\RandomTagController;
use App\Http\Controllers\Search\SearchChannelController;
use App\Http\Controllers\Search\SearchRandomChannelController;
use App\Http\Controllers\Search\SearchRandomPathController;
use App\Http\Controllers\Search\SearchTagController;
use App\Http\Controllers\Search\SearchVideoController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\Video\GetAllTagsController;
use App\Http\Controllers\Video\UploadController;
use App\Http\Controllers\Video\VideoController;
use App\Models\MyList;
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
Route::get('/scroll_load', [RandomPath::class, 'scroll_load']);

// 動画再生画面
Route::get('/video/{id}', [VideoController::class, 'getPath']);

// ユーザー登録関係
Route::get('/auth/verifyemail/{token}', [RegisterController::class, 'verify']);
Auth::routes();
Route::get('/resend', [RegisterController::class, 'showReSendForm'])->name('resend');
Route::post('/resend', [RegisterController::class, 'reSend']);

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

Route::get('/search/tag/name', [SearchTagController::class, 'search'])->name('search.tag');
Route::get('/search/tag', [GetAllTagsController::class, 'index']);


// テスト用ページ呼び出し
Route::get('/test', [TestController::class, 'index']);


// 以下のURLアクセス時にログインしていないユーザーをログイン画面へ送る
Route::group(['middleware' => 'auth'], function () {

    // 画像投稿をコントローラーに送信
    Route::post('/new_send', [UploadController::class, 'saveimg']);

    Route::post('/intro_send', [ProfileEditController::class, 'update']);

    // 各ユーザーのホームページ画面
    Route::get('/home/{name}', [HomeController::class, 'path']);

    // チェックボックスの内容をコントローラーから取得
    Route::get('/upload', [RandomTagController::class, 'showValue']);

    // 投稿動画変更画面
    Route::get('/video_edit', function () {
        return view('video/video_edit');
    });

    // パスワード変更画面
    Route::get('/pw_edit', function () {
        return view('edit/password_edit');
    });

    // プロフィール変更画面
    Route::get('/intro_edit', function () {
        return view('edit.introduction_edit');
    });

    // お気に入り登録処理
    Route::post('/my_list_register/{id}', [VideoController::class, 'myListRegister']);

    // マイリスト画面
    Route::get('/my_list', [MyList::class, 'display']);

});

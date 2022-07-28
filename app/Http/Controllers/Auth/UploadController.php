<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class UploadController extends Controller
{
    use AuthenticatesUsers;
    public function saveimg(Request $request)
    {
        $user = Auth::user();

        // 送られてきた動画の拡張子を制限
        $request->validate(['post_movies' => 'mimes:mp4,wmv,mpg,mov,avi,mkv.flv,asf,wmv']);
        // 送られてきたサムネイルの拡張子を制限
        $request->validate(['post_thumbnail' => 'mimes:jpg,jpeg,JPG,JPEG,jpe,jfif,svg,webp,tiff']);
        // 動画を保存
        $request->file('post_movies')->store('public/users/' . $user['name'] . '/1');
        // 動画を保存
        $request->file('post_thumbnail')->store('public/users/' . $user['name'] . '/1');
        // リダイレクト
        return redirect('/home');
    }
}

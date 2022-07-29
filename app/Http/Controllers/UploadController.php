<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UploadController extends Controller
{
    use AuthenticatesUsers;

    public function saveimg(Request $request)
    {
        $user = Auth::user();
        $artwork = new Artwork();

        $title = $request->input(['title']);
        $comment = $request->input(['comment']);

        $data = $artwork->insert_data($user['name'], $title, $comment);
        $artwork_num = $data['artwork_num'];
        $name = $data['name'];

        // 送られてきた動画の拡張子を制限
        $request->validate(['post_movies' => 'mimes:mp4,wmv,mpg,mov,avi,mkv.flv,asf,wmv']);
        // 送られてきたサムネイルの拡張子を制限
        $request->validate(['post_thumbnail' => 'mimes:jpg,jpeg,JPG,JPEG,jpg,jfif,svg,webp,tiff,png']);


        $extension_m = $request->file('post_movies')->getClientOriginalExtension();
        $extension_t = $request->file('post_thumbnail')->getClientOriginalExtension();


        // 動画を保存
        $request->file('post_movies')->storeAs('public/users/' . $name . '/' . $artwork_num, 'movie.' . $extension_m);
        // 動画を保存
        $request->file('post_thumbnail')->storeAs('public/users/' . $name . '/' . $artwork_num, 'thumbnail.' . $extension_t);

        // リダイレクト
        return redirect('/home');
    }
}

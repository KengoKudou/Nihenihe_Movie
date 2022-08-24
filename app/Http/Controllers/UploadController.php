<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use FFMpeg;

class UploadController extends Controller
{
    use AuthenticatesUsers;

    public function saveimg(Request $request)
    {
        $request->validate([
            // 入力されており、64文字以内であること
            'title' => 'required|max:64',
            // 入力されており、1024文字以内であること
            'comment' => 'required|max:1024',
            // タグが一つ以上入力されていること
            'tag' => 'required',
            // 送られてきた動画の拡張子を制限
            'post_movies' => 'required|mimes:mp4,wmv,mpg,mov,avi',
            // 送られてきたサムネイルの拡張子を制限
            'post_thumbnail' => 'required|mimes:jpg,jpeg,JPG,JPEG,jpg,png',
        ], [
            'title.max' => '64文字以内で入力してください',
            'comment.max' => '1024文字以内で入力してください',
            'tag.required' => '一つ以上タグを選択してください',
            'post_movies.mimes' => '動画の形式は「mp4,wmv,mpg,mov,avi」のどれかにしてください',
            'post_thumbnail.mimes' => 'サムネイル画像の形式はJPEGもしくはPNGにしてください'
        ]);

        $user = Auth::user();
        $artwork = new Artwork();

        $title = $request->input(['title']);
        $comment = $request->input(['comment']);
        $tag_data = $request->input(['tag']);

        $data = $artwork->insert_data($user['name'], $title, $comment, $tag_data);
        $artwork_num = $data['artwork_num'];
        $name = $data['name'];

        $extension_m = $request->file('post_movies')->getClientOriginalExtension();

        $resized_image = Image::make($request->file('post_thumbnail'))->resize(244, 137.25)->encode('jpg');

        // 動画を保存
        $request->file('post_movies')->storeAs('public/users/' . $name . '/' . $artwork_num, 'movie.' . $extension_m);
        // サムネイルを保存
        Storage::put('public/users/' . $name . '/' . $artwork_num . '/thumbnail.jpg', $resized_image);
        // リダイレクト
        return redirect('/home');
    }
}

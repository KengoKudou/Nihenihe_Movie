<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    //使ってない
    //public function postimg()
    //{
    //   return view('img');
    //}

    public function saveimg(Request $request)
    {
        $request->file('post_movies')->store('public/post_movies');
        $request->validate(['upload_file' => 'required|max:1024']);
        return redirect('/home');
    }
}

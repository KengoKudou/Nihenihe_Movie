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
        $request->validate(['post_movies' => 'mimes:mp4,wmv,mpg,mov,avi,mkv.flv,asf,wmv']);
        $request->file('post_movies')->store('public/post_movies');
        return redirect('/home');
    }
}

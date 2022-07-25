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

        return redirect('/home');
    }
}

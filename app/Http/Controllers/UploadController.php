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

        $title = $request->input(['title']);
        $file = $request->file('post_movies')->getClientOriginalName();
        $extension = pathinfo($file, PATHINFO_EXTENSION);
        $fileName = $title . '.' . $extension;

        $request->validate(['post_movies' => 'mimes:mp4,wmv,mpg,mov,avi,mkv.flv,asf,wmv']);

        $request->file('post_movies')->storeAs('public/post_movies', $fileName);

        return redirect('/home');
    }
}

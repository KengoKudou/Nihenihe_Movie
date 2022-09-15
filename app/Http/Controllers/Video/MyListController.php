<?php

namespace App\Http\Controllers\Video;

use App\Http\Controllers\Controller;
use Auth;

class MyListController extends Controller
{
    public function display()
    {
        $user_id = Auth::user()->id;

        return view('video/my_list', $send_data);

    }
}

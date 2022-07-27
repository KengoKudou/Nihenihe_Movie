<?php

namespace App\Http\Controllers;

class CheckBoxController extends Controller
{
    public function showValue()
    {
        $tag['tags'] = ['omoro', '( ﾟДﾟ)ﾊｧ?', '☻'];
        return view('video/upload', $tag);
    }
}

<?php

namespace App\Http\Controllers;

class CheckBoxController extends Controller
{
    public function showValue()
    {
        $tag['tags'] = ['omoro', '( ﾟДﾟ)ﾊｧ?', '☻', '泣ける', 'うける', 'たのしい', 'おもしろくない', '伝説', '阿保', 'いいね','www'];
        return view('video/upload', $tag);
    }
}

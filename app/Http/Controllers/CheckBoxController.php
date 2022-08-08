<?php

namespace App\Http\Controllers;

use App\Models\Tag;

class CheckBoxController extends Controller
{
    public function showValue()
    {
        $tag = new Tag();
        $send_data['tags'] = $tag->random_tag_get();
        return view('video/upload', $send_data);
    }
}

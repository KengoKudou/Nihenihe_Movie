<?php

namespace App\Http\Controllers;

use App\Models\Tag;

class RandomTagController extends Controller
{
    public function showValue()
    {
        return view('video/upload', ['tags' => Tag::random_tag_get()]);
    }
}

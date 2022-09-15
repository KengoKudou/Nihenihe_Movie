<?php

namespace App\Http\Controllers\Random;

use App\Http\Controllers\Controller;
use App\Models\Tag;

class RandomTagController extends Controller
{
    public function showValue()
    {
        return view('video/upload', ['tags' => Tag::random_tag_get()]);
    }
}

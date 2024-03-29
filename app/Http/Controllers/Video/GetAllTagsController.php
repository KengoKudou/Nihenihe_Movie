<?php

namespace App\Http\Controllers\Video;

use App\Http\Controllers\Controller;
use App\Models\Tag;

class GetAllTagsController extends Controller
{
    public function index()
    {
        return view('search.search_tag', ['tags' => Tag::get_all_tag()]);
    }
}

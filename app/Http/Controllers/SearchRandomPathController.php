<?php

namespace App\Http\Controllers;

use App\Models\Artwork;

class SearchRandomPathController extends Controller
{
    public function path()
    {
        return view('search/search_video', ['data'=>Artwork::get_random_data()]);
    }
}

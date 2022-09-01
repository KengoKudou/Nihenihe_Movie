<?php

namespace App\Http\Controllers\Search;

use App\Http\Controllers\Controller;
use App\Models\Artwork;

class SearchRandomPathController extends Controller
{
    public function path()
    {
        return view('search/search_video', ['data'=>Artwork::get_random_data()]);
    }
}

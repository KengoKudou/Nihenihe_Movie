<?php

namespace App\Http\Controllers;

use App\Models\Artwork;

class SerachRandomPathController extends Controller
{
    public function path()
    {
        return view('search/search_form', ['data'=>Artwork::get_random_data()]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Artwork;

class SerachRandomPathController extends Controller
{
    public function path()
    {
        $artwork = new Artwork();
        $data['data'] = $artwork->get_random_data();
        return view('search/search_form', $data);
    }
}

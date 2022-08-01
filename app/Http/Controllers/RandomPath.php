<?php

namespace App\Http\Controllers;

use App\Models\Artwork;

class RandomPath extends Controller
{
    public function random()
    {
        $artwork = new Artwork();
        $data['data'] = $artwork->get_random_data();
        return view('welcome', $data);
    }
}

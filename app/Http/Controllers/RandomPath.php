<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
use Auth;

class RandomPath extends Controller
{
    public function random()
    {
        return view('welcome', ['data' => Artwork::get_random_data()]);
    }

    public function scroll_load(){
        return response()->json([
            'test' => 'ugoiteruyo'
        ]);
    }
}

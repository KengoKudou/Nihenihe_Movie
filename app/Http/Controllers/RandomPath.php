<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
use Auth;
use phpDocumentor\Reflection\Types\Array_;

class RandomPath extends Controller
{
    public function random()
    {
        return view('welcome', ['data' => Artwork::get_random_data()]);
    }

    public function scroll_load()
    {
        $send_data = [];
        foreach (Artwork::get_random_data() as $data) {
            $time = VideoTimeController::time($data->movie_path);
            $data->time = $time;
            $send_data[] = $data;
        }
        return response()->json($send_data);
    }
}

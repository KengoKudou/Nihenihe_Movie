<?php

namespace App\Http\Controllers;

use App\Models\Artwork;

class VideoLinkController extends Controller
{
    public function getPath($id)
    {
        $artwork = new Artwork();
        $data['data'] = $artwork->get_data_id($id)[0];
        return view('video/video', $data);
    }
}

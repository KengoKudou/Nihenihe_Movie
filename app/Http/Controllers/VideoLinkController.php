<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
use App\Models\ArtworkTag;

class VideoLinkController extends Controller
{
    public function getPath($Artwork_id)
    {
        $send_data = [
            'data' => Artwork::get_data_id($Artwork_id)[0],
            'tags' => ArtworkTag::tag_gat($Artwork_id)
        ];

        return view('video/video', $send_data);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
use App\Models\ArtworkTag;

class VideoLinkController extends Controller
{
    public function getPath($Artwork_id)
    {
        $artwork = new Artwork();
        $A_tag = new ArtworkTag();

        $send_data['main_data'] = $artwork->get_data_id($Artwork_id)[0];
        $send_data['tags'] = $A_tag->tag_gat($Artwork_id);

        return view('video/video', $send_data);
    }
}

<?php

namespace App\Http\Controllers\Video;

use App\Http\Controllers\Controller;
use App\Models\Artwork;
use App\Models\ArtworkTag;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function getPath($Artwork_id)
    {
        $send_data = [
            'data' => Artwork::get_data_id($Artwork_id)[0],
            'tags' => ArtworkTag::tag_gat($Artwork_id)
        ];

        return view('video/video', $send_data);
    }

    public function myListRegister(Request $request)
    {

    }


}

<?php

namespace App\Http\Controllers\Video;

use App\Http\Controllers\Controller;
use App\Models\Artwork;
use App\Models\ArtworkTag;
use App\Models\MyList;
use Auth;

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

    public function myListRegister($Artwork_id)
    {
        $user_id = Auth::user()->id;
        $array = MyList::get_array_myList($user_id)[0];
        foreach ($array as $like => $item) {
            if($item==$Artwork_id){
                dd('ok');
            }elseif ($item == 1) {
                $array[$like] = intval($Artwork_id);
                break;
            }
        }
        MyList::update_date($array, $user_id);
    }

}

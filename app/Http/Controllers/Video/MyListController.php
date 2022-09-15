<?php

namespace App\Http\Controllers\Video;

use App\Http\Controllers\Controller;
use App\Models\Artwork;
use App\Models\MyList;
use Auth;

class MyListController extends Controller
{
    public function display()
    {
        $user_id = Auth::user()->id;
        $array = MyList::get_array_myList($user_id)[0];
        foreach ($array as $like => $id) {
            if ($id != 1) {
                $data['data'][$like] = Artwork::get_data_id($id)[0];
            }
        }
        return view('search.search_video_list', $data);

    }
}

<?php

namespace App\Http\Controllers\Search;

use App\Http\Controllers\Controller;
use App\Models\Artwork;

class SearchRandomChannelController extends Controller
{
    public function index()
    {
        $data = Artwork::get_artwork_num();
        foreach ($data as $datum) {
            foreach ($datum as $user) {
                if ($user->artwork_num == null) {
                    $user->artwork_num = 0;
                }
            }
        }
        return view('search/search_channel', $data);
    }
}

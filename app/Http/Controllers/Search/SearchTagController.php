<?php

namespace App\Http\Controllers\Search;

use App\Http\Controllers\Controller;
use App\Models\Artwork;
use App\Models\ArtworkTag;
use App\Models\Tag;
use Database\Seeders\ArtworkTableSeeder;
use Illuminate\Http\Request;

class SearchTagController extends Controller
{
    public function index(Request $request)
    {
        $tag = $request->input('tag');
        $tag_list = Tag::search_tag($tag);
        $video_list = ArtworkTag::search_video($tag_list[0]->id);
        foreach ($video_list as $video) {
            $data['data'][] = Artwork::get_data_id($video->artwork_id)[0];
        }
        return view('search/search_video_list', $data);
    }
}

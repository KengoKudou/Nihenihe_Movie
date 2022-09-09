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
    public function search(Request $request)
    {
        $tags = $request->input('tag');

        if (is_array($tags)) {
            foreach ($tags as $tag) {
                $tag_list[] = Tag::search_tag($tag)[0];
            }
        } else {
            $tag_list[] = Tag::search_tag($tags)[0];
        }
        foreach ($tag_list as $tag) {
            $tag_id[] = $tag->id;
        }

        $len = count($tag_id);

        while ($len <= 9) {
            $tag_id[] = 1;
            $len += 1;

        }

        $video_list = ArtworkTag::search_video($tag_id);
        foreach ($video_list as $video) {
            $data['data'][] = Artwork::get_data_id($video->artwork_id)[0];
        }
        return view('search/search_video_list', $data);
    }
}

<?php

namespace App\Http\Controllers\Search;

use App\Http\Controllers\Controller;
use App\Models\Artwork;
use Illuminate\Http\Request;


class SearchVideoController extends Controller
{
    public function search(Request $request)
    {
        // 検索フォームで入力された値を取得する
        $keyword = $request->input('keyword');

        if (!empty($keyword)) {
            return view('search.search_video_list', ['data' => Artwork::get_data_title($keyword)]);
        }
    }
}

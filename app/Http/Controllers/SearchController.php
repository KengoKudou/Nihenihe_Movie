<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Artwork;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;


class SearchController extends Controller
{
    public function search(Request $request)
    {
        $artwork = new Artwork();
        // 検索フォームで入力された値を取得する
        $keyword = $request->input('keyword');

        if (!empty($keyword)) {
            $data['data'] = $artwork->get_data_title($keyword);
            return view('video/search', $data);
        }
    }
}

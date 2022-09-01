<?php

namespace App\Http\Controllers\Search;

use App\Http\Controllers\Controller;
use App\Models\Artwork;
use Illuminate\Http\Request;

class SearchChannelController extends Controller
{
    public function search(Request $request)
    {
        // 検索フォームで入力された値を取得する
        $keyword = $request->input('keyword');
        if (!empty($keyword)) {
            $data = Artwork::get_data_user($keyword);
            foreach ($data as $datum) {
                foreach ($datum as $user) {
                    if ($user->artwork_num == null) {
                        $user->artwork_num = 0;
                    }
                }
            }
            return view('search/search_channel_list', $data);
        }
    }
}

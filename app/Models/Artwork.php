<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artwork extends Model
{
    // 変更を加えても良いカラムを指定
    protected $fillable = [
        // ユーザー名が登録されるカラムです。
        'name',
        // ユーザー事の作品のフォルダー数が登録されているカラムです。
        'artwork_num',
        // 作品のタイトルが登録されるカラムです。
        'title',
        // 作品のコメントが登録されるカラムです。
        'comment'
    ];

    // データをインサートするためのメソッド
    public function insert_data($user_id, $title, $comment)
    {
        // リターンを使う事で、登録しつつそのデータを返している
        return $this
            ->create([
                // カラム 'user_id' に受け取ったユーザー名を登録
                'name' => $user_id,
                // カラム 'artwork_num' に作品の数を登録
                'artwork_num' => $this->max_artwork_num($user_id),
                // カラム 'title' に受け取ったタイトルを登録
                'title' => $title,
                // カラム 'comment' に受け取ったコメントを登録
                'comment' => $comment,
            ]);
    }

    private function max_artwork_num($user_id)
    {
        $artwork_num = $this
            // カラム 'artwork_num' の最大値を取得する
            ->where('name', $user_id)
            ->max('artwork_num')
            ->first('artwork_num');

        // 作品が一個もない場合
        if ($artwork_num == 0 || $artwork_num == null) {
            return 1;
        }

        return $artwork_num + 1;
    }
}

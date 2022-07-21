<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artwork extends Model
{
    // 変更を加えても良いカラムを指定
    protected $fillable = [
        // ユーザー名が登録されるカラムです。
        'name',
        // 作品のタイトルが登録されるカラムです。
        'title',
        // 作品のコメントが登録されるカラムです。
        'comment',
        // 作品の場所を登録するカラムです。
        'data_path'
    ];

    // データをインサートするためのメソッド
    public function insert_data($user_id, $title, $comment, $data_path)
    {
        // リターンを使う事で、登録しつつそのデータを返している
        return $this
            ->create([
                // カラム'user_id'に受け取ったユーザー名を登録
                'name' => $user_id,
                // カラム'title'に受け取ったタイトルを登録
                'title' => $title,
                // カラム'comment'に受け取ったコメントを登録
                'comment' => $comment,
                // カラム'data_path'に受け取った情報の保存場所を保存
                'data_path' => $data_path
            ]);
    }
}

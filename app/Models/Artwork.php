<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;

class Artwork extends Model
{
    // 変更を加えても良いカラムを指定
    protected $fillable = [
        // ユーザー名が登録されるカラムです。
        'name',
        // ユーザー毎の作品のフォルダー数が登録されているカラムです。
        'artwork_num',
        // 作品のタイトルが登録されるカラムです。
        'title',
        // 作品のコメントが登録されるカラムです。
        'comment'
    ];

    // データをインサートするためのメソッド
    public static function insert_data($name, $title, $comment, $tag_data)
    {
        $artwork_data = self::create([
            // カラム 'name' に受け取ったユーザー名を登録
            'name' => $name,
            // カラム 'artwork_num' に作品の数を登録
            'artwork_num' => self::max_artwork_num($name),
            // カラム 'title' に受け取ったタイトルを登録
            'title' => $title,
            // カラム 'comment' に受け取ったコメントを登録
            'comment' => $comment,
        ]);

        ArtworkTag::insert_data($artwork_data['id'], $tag_data);

        return $artwork_data;
    }

    // 作品の番号を取得
    private static function max_artwork_num($name)
    {
        $artwork_num = DB::table('artworks')
            // カラム 'artwork_num' の最大値を取得する
            ->where('name', $name)
            ->max('artwork_num');

        // 作品が一個もない場合
        if ($artwork_num == 0 || $artwork_num == null) {
            return 1;
        }

        return $artwork_num + 1;
    }

    private static function get_path($data)
    {
        $user_path = 'storage/users/' . $data->name . '/' . $data->artwork_num . '/';
        $movie_path = glob($user_path . 'movie.*');
        $thumbnail_path = glob($user_path . 'thumbnail.*');

        $paths[] = $movie_path[0];
        $paths[] = $thumbnail_path[0];

        return $paths;
    }

    // 作品の情報を取得
    public static function get_data_name($name)
    {
        $all_data = DB::table('artworks')
            ->where('name', $name)
            ->get();

        $send_data = array();

        foreach ($all_data as $data) {
            $paths = self::get_path($data);
            $data->movie_path = $paths[0];
            $data->thumbnail_path = $paths[1];

            $send_data[] = $data;
        }

        return $send_data;
    }

    // 作品の情報を取得
    public static function get_data_title($title)
    {
        $all_data = DB::table('artworks')
            ->where("title", "like", "%{$title}%")
            ->get();

        $send_data = array();

        foreach ($all_data as $data) {
            $paths = self::get_path($data);
            $data->movie_path = $paths[0];
            $data->thumbnail_path = $paths[1];
            $send_data[] = $data;
        }

        return $send_data;
    }

    public static function get_data_id($id)
    {
        $all_data = DB::table('artworks')
            ->where('id', $id)
            ->get();

        $send_data = array();

        foreach ($all_data as $data) {
            $paths = self::get_path($data);
            $data->movie_path = $paths[0];
            $data->thumbnail_path = $paths[1];

            $send_data[] = $data;
        }

        return $send_data;
    }

    public static function get_random_data()
    {
        $all_data = DB::table('artworks')
            ->inRandomOrder()
            ->take(10)
            ->get();

        $send_data = array();

        foreach ($all_data as $data) {
            $paths = self::get_path($data);
            $data->movie_path = $paths[0];
            $data->thumbnail_path = $paths[1];

            $send_data[] = $data;
        }

        return $send_data;
    }
}

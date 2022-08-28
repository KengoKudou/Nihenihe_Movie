<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Tag extends Model
{
    protected $fillable = ['tag'];

    public static function init()
    {
        self::create(
            ['tag' => 'master_null']
        );

        $datas = ['VOCALOID4', 'VOCALOID5', 'どうしてこうなった...', '初音ミク', '全ての元凶'];
        foreach ($datas as $data) {
            self::create(
                ['tag' => $data]
            );
        }
    }

    public static function insert_data($tag)
    {
        return self::create(['tag' => $tag]);
    }

    public static function search_tag($tag)
    {
        return DB::table('tags')
            ->where('tag', $tag)
            ->get();
    }

    public static function search_id($id)
    {
        return DB::table('tags')
            ->where('id', $id)
            ->get();
    }

    public static function random_tag_get()
    {
        return DB::table('tags')
            ->where('id', '!=', 1)
            ->inRandomOrder()
            ->take(5)
            ->get();
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['tag'];

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

    public static function get_all_tag()
    {
        return DB::table('tags')
            ->where('id','!=',1)
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
            ->take(10)
            ->get();
    }
}

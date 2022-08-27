<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class UsersComment extends Model
{
    protected $fillable = ['comment'];

    public static function insert_data($comment)
    {
        return self::create([
            'comment' => $comment
        ]);
    }

    public static function get_comment($name)
    {
        return DB::table('users_comments')
            ->where('name', $name)
            ->get();
    }
}

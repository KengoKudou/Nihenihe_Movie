<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class UsersComment extends Model
{
    public static function intro_update($new_name, $old_name, $comment, $id)
    {
        $artworks = DB::table('artworks')->where('name', $old_name)->update(['name' => $new_name]);

        DB::table('users')->where('id', $id)->update(['name' => $new_name, 'comment' => $comment]);
    }
}

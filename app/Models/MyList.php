<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;

class MyList extends Model
{
    protected $fillable =[
        'user_id'
    ];

    public static function insert_myList($id)
    {
        self::create([
            'user_id' => $id
        ]);
    }

    public static function update_myList($id)
    {

    }
}

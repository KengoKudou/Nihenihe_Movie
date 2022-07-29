<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsersComment extends Model
{
    protected $fillable = ['comment'];

    public function insert_data($comment){
        return $this->create([
            'comment' => $comment
        ]);
    }

    public function get_comment($name){
        return $this
            ->where('name', $name)
            ->first(['comment']);
    }
}

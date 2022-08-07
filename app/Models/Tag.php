<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['tag'];

    public function init()
    {
        $this->create(['tag' => 'master_null']);
    }

    public function insert_data($tag)
    {
        return $this
            ->create(['tag' => $tag]);
    }

    public function search_tag($tag)
    {
        return $this
            ->where('tag', $tag)
            ->get();
    }

    public function search_id($id)
    {
        return $this
            ->where('id', $id)
            ->get();
    }
}

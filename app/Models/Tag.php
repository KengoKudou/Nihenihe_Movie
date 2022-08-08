<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['tag'];

    public function init()
    {
        $this->create(
            ['tag' => 'master_null']
        );

        $datas = ['VOCALOID4', 'VOCALOID5', 'どうしてこうなった...', '初音ミク', '全ての元凶'];
        foreach ($datas as $data) {
            $this->create(
                ['tag' => $data]
            );
        }
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

    public function random_tag_get()
    {
        return $this
            ->where('id', '!=', 1)
            ->inRandomOrder()
            ->take(5)
            ->get();
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use PhpOption\None;

class ArtworkTag extends Model
{
    protected $fillable = [
        'artwork_id',
        'tag1', 'tag2', 'tag3', 'tag4', 'tag5',
        'tag6', 'tag7', 'tag8', 'tag9', 'tag10'
    ];

    public function insert_data(
        $artwork_id,
        $tag1, $tag2 = null, $tag3 = null, $tag4 = null, $tag5 = null,
        $tag6 = null, $tag7 = null, $tag8 = null, $tag9 = null, $tag10 = null
    )
    {
        return $this
            ->create([
                'artwork_id' => $artwork_id,
                'tag1' => $tag1, 'tag2' => $tag2, 'tag3' => $tag3, 'tag4' => $tag4, 'tag5' => $tag5,
                'tag6' => $tag6, 'tag7' => $tag7, 'tag8' => $tag8, 'tag9' => $tag9, 'tag10' => $tag10
            ]);
    }
}

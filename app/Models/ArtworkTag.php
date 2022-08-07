<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use PhpOption\None;
use function PHPUnit\Framework\isEmpty;

class ArtworkTag extends Model
{
    protected $fillable = [
        'artwork_id',
        'tag1', 'tag2', 'tag3', 'tag4', 'tag5',
        'tag6', 'tag7', 'tag8', 'tag9', 'tag10'
    ];

    public function insert_data($artwork_id, $data_list)
    {
        $tag = new Tag();

        $reg_list = ['artwork_id' => $artwork_id];
        $num = 1;

        foreach ($data_list as $data) {
            $tag_id = $tag->search_tag($data);

            if ($tag_id->isEmpty()) {
                $new_tag_id = $tag->insert_data($data)['id'];
                $reg_list['tag' . $num] = $new_tag_id;
            } else {
                $reg_list['tag' . $num] = $tag_id[0]['id'];
            }

            $num++;
        }
        return $this->create($reg_list);
    }
}

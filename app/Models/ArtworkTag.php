<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class ArtworkTag extends Model
{
    protected $fillable = [
        'artwork_id',
        'tag1', 'tag2', 'tag3', 'tag4', 'tag5',
        'tag6', 'tag7', 'tag8', 'tag9', 'tag10'
    ];

    public static function insert_data($artwork_id, $data_list)
    {
        $reg_list = ['artwork_id' => $artwork_id];
        $num = 1;

        foreach ($data_list as $data) {
            $tag_id = Tag::search_tag($data);

            if ($tag_id->isEmpty()) {
                $new_tag_id = Tag::insert_data($data)->id;
                $reg_list['tag' . $num] = $new_tag_id;
            } else {
                $reg_list['tag' . $num] = $tag_id[0]->id;
            }

            $num++;
        }
        return self::create($reg_list);
    }

    public static function tag_gat($Artwork_id)
    {
        $tag_num_data = DB::table('artwork_tags')
            ->where('id', $Artwork_id)
            ->get();

        $all_tags = array();

        foreach ($tag_num_data as $tag_num) {
            for ($i = 1; $i < 11; $i++) {
                $num = 'tag' . $i;
                $tag_data = Tag::search_id($tag_num->$num)[0]->tag;
                if ($tag_data == 'master_null') {
                    break;
                }
                $all_tags[] = $tag_data;
            }
        }

        return $all_tags;
    }
}

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


    public static function search_video($tag_id)
    {
        return DB::table('artwork_tags')
            ->where(function ($query) use ($tag_id) {
                $query->orWhere("tag1", $tag_id[0])
                    ->orWhere("tag2", $tag_id[0])
                    ->orWhere("tag3", $tag_id[0])
                    ->orWhere("tag4", $tag_id[0])
                    ->orWhere("tag5", $tag_id[0])
                    ->orWhere("tag6", $tag_id[0])
                    ->orWhere("tag7", $tag_id[0])
                    ->orWhere("tag8", $tag_id[0])
                    ->orWhere("tag9", $tag_id[0])
                    ->orWhere("tag10", $tag_id[0]);
            })
            ->where(function ($query) use ($tag_id) {
                $query->orWhere("tag1", $tag_id[1])
                    ->orWhere("tag2", $tag_id[1])
                    ->orWhere("tag3", $tag_id[1])
                    ->orWhere("tag4", $tag_id[1])
                    ->orWhere("tag5", $tag_id[1])
                    ->orWhere("tag6", $tag_id[1])
                    ->orWhere("tag7", $tag_id[1])
                    ->orWhere("tag8", $tag_id[1])
                    ->orWhere("tag9", $tag_id[1])
                    ->orWhere("tag10", $tag_id[1]);
            })
            ->where(function ($query) use ($tag_id) {
                $query->orWhere("tag1", $tag_id[2])
                    ->orWhere("tag2", $tag_id[2])
                    ->orWhere("tag3", $tag_id[2])
                    ->orWhere("tag4", $tag_id[2])
                    ->orWhere("tag5", $tag_id[2])
                    ->orWhere("tag6", $tag_id[2])
                    ->orWhere("tag7", $tag_id[2])
                    ->orWhere("tag8", $tag_id[2])
                    ->orWhere("tag9", $tag_id[2])
                    ->orWhere("tag10", $tag_id[2]);
            })
            ->where(function ($query) use ($tag_id) {
                $query->orWhere("tag1", $tag_id[3])
                    ->orWhere("tag2", $tag_id[3])
                    ->orWhere("tag3", $tag_id[3])
                    ->orWhere("tag4", $tag_id[3])
                    ->orWhere("tag5", $tag_id[3])
                    ->orWhere("tag6", $tag_id[3])
                    ->orWhere("tag7", $tag_id[3])
                    ->orWhere("tag8", $tag_id[3])
                    ->orWhere("tag9", $tag_id[3])
                    ->orWhere("tag10", $tag_id[3]);
            })
            ->where(function ($query) use ($tag_id) {
                $query->orWhere("tag1", $tag_id[4])
                    ->orWhere("tag2", $tag_id[4])
                    ->orWhere("tag3", $tag_id[4])
                    ->orWhere("tag4", $tag_id[4])
                    ->orWhere("tag5", $tag_id[4])
                    ->orWhere("tag6", $tag_id[4])
                    ->orWhere("tag7", $tag_id[4])
                    ->orWhere("tag8", $tag_id[4])
                    ->orWhere("tag9", $tag_id[4])
                    ->orWhere("tag10", $tag_id[4]);
            })
            ->where(function ($query) use ($tag_id) {
                $query->orWhere("tag1", $tag_id[5])
                    ->orWhere("tag2", $tag_id[5])
                    ->orWhere("tag3", $tag_id[5])
                    ->orWhere("tag4", $tag_id[5])
                    ->orWhere("tag5", $tag_id[5])
                    ->orWhere("tag6", $tag_id[5])
                    ->orWhere("tag7", $tag_id[5])
                    ->orWhere("tag8", $tag_id[5])
                    ->orWhere("tag9", $tag_id[5])
                    ->orWhere("tag10", $tag_id[5]);
            })
            ->where(function ($query) use ($tag_id) {
                $query->orWhere("tag1", $tag_id[6])
                    ->orWhere("tag2", $tag_id[6])
                    ->orWhere("tag3", $tag_id[6])
                    ->orWhere("tag4", $tag_id[6])
                    ->orWhere("tag5", $tag_id[6])
                    ->orWhere("tag6", $tag_id[6])
                    ->orWhere("tag7", $tag_id[6])
                    ->orWhere("tag8", $tag_id[6])
                    ->orWhere("tag9", $tag_id[6])
                    ->orWhere("tag10", $tag_id[6]);
            })
            ->where(function ($query) use ($tag_id) {
                $query->orWhere("tag1", $tag_id[7])
                    ->orWhere("tag2", $tag_id[7])
                    ->orWhere("tag3", $tag_id[7])
                    ->orWhere("tag4", $tag_id[7])
                    ->orWhere("tag5", $tag_id[7])
                    ->orWhere("tag6", $tag_id[7])
                    ->orWhere("tag7", $tag_id[7])
                    ->orWhere("tag8", $tag_id[7])
                    ->orWhere("tag9", $tag_id[7])
                    ->orWhere("tag10", $tag_id[7]);
            })
            ->where(function ($query) use ($tag_id) {
                $query->orWhere("tag1", $tag_id[8])
                    ->orWhere("tag2", $tag_id[8])
                    ->orWhere("tag3", $tag_id[8])
                    ->orWhere("tag4", $tag_id[8])
                    ->orWhere("tag5", $tag_id[8])
                    ->orWhere("tag6", $tag_id[8])
                    ->orWhere("tag7", $tag_id[8])
                    ->orWhere("tag8", $tag_id[8])
                    ->orWhere("tag9", $tag_id[8])
                    ->orWhere("tag10", $tag_id[8]);
            })
            ->where(function ($query) use ($tag_id) {
                $query->orWhere("tag1", $tag_id[9])
                    ->orWhere("tag2", $tag_id[9])
                    ->orWhere("tag3", $tag_id[9])
                    ->orWhere("tag4", $tag_id[9])
                    ->orWhere("tag5", $tag_id[9])
                    ->orWhere("tag6", $tag_id[9])
                    ->orWhere("tag7", $tag_id[9])
                    ->orWhere("tag8", $tag_id[9])
                    ->orWhere("tag9", $tag_id[9])
                    ->orWhere("tag10", $tag_id[9]);
            })
            ->get();
    }
}

<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;

class MyList extends Model
{
    protected $fillable = [
        'user_id'
    ];

    public static function insert_myList($id)
    {
        self::create([
            'user_id' => $id
        ]);
    }

    public static function get_array_myList($user_id)
    {
        $builder = self::select(['like1', 'like2', 'like3',
            'like4', 'like5', 'like6',
            'like7', 'like8', 'like9',
            'like10', 'like11', 'like12',
            'like13', 'like14', 'like15',
            'like16', 'like17', 'like18',
            'like19', 'like20', 'like21',
            'like22', 'like23', 'like24',
            'like25', 'like26', 'like27',
            'like28', 'like29', 'like30',
            'like31', 'like32', 'like33',
            'like34', 'like35', 'like36',
            'like37', 'like38', 'like39',
            'like40', 'like41', 'like42',
            'like43', 'like44', 'like45',
            'like46', 'like47', 'like48',
            'like49', 'like50',
        ]);
        $builder = $builder->where('user_id', $user_id);
        return $builder->get()->toArray();


    }

    public static function update_date($array, $user_id)
    {
        foreach ($array as $like => $item) {
            self::where('user_id', $user_id)
                ->update([
                    $like => $item]);
        }

    }

    public static function get_data($user_id)
    {
        $data= self::where('user_id', $user_id)->get();
    }

}

<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MyListSeeder extends Seeder
{
    public function run()
    {
        DB::table('my_list')->insert([
            'user_id' => 1,
            'like1' => 2,
            'like2' => 1,
            'like3' => 1,
            'like4' => 1,
            'like5' => 1,
            'like6' => 1,
            'like7' => 1,
            'like8' => 1,
            'like9' => 1,
            'like10' => 1,
            'like11' => 1,
            'like12' => 1,
            'like13' => 1,
            'like14' => 1,
            'like15' => 1,
            'like16' => 1,
            'like17' => 1,
            'like18' => 1,
            'like19' => 1,
            'like20' => 1,
            'like21' => 1,
            'like22' => 1,
            'like23' => 1,
            'like24' => 1,
            'like25' => 1,
            'like26' => 1,
            'like27' => 1,
            'like28' => 1,
            'like29' => 1,
            'like30' => 1,
            'like31' => 1,
            'like32' => 1,
            'like33' => 1,
            'like34' => 1,
            'like35' => 1,
            'like36' => 1,
            'like37' => 1,
            'like38' => 1,
            'like39' => 1,
            'like40' => 1,
            'like41' => 1,
            'like42' => 1,
            'like43' => 1,
            'like44' => 1,
            'like45' => 1,
            'like46' => 1,
            'like47' => 1,
            'like48' => 1,
            'like49' => 1,
            'like50' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
    }
}

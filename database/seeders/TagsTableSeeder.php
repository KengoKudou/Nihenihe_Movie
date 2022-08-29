<?php

namespace Database\Seeders;

use App\Models\Tag;
use DateTime;
use Illuminate\Database\Seeder;
use DB;

class TagsTableSeeder extends Seeder
{
    public function run()
    {
        $tag_data = [
            'VOCALOID4',
            'VOCALOID5',
            'どうしてこうなった...',
            '初音ミク',
            '全ての元凶'
        ];

        DB::table('tags')->insert([
            'tag' => 'master_null',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);

        foreach ($tag_data as $tag) {
            DB::table('tags')->insert([
                'tag' => $tag,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ]);
        }

        Tag::factory(5)->create();
    }
}

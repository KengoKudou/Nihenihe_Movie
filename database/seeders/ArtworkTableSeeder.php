<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtworkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('artworks')->insert([
            'id' => 1,
            'name' => 'Master',
            'artwork_num' => 1,
            'title' => 'Master',
            'comment' => 'Master',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('artworks')->insert([
            'id' => 2,
            'name' => 'kk',
            'artwork_num' => 1,
            'title' => 'test2',
            'comment' => 'comment2',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('artworks')->insert([
            'id' => 3,
            'name' => 'qlfa',
            'artwork_num' => 1,
            'title' => 'Test video',
            'comment' => 'コメント',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('artworks')->insert([
            'id' => 4,
            'name' => 'Hero',
            'artwork_num' => 1,
            'title' => 'テスト',
            'comment' => 'komento',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('artworks')->insert([
            'id' => 5,
            'name' => 'kk',
            'artwork_num' => 2,
            'title' => 'TEST',
            'comment' => 'COMMENT',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('artworks')->insert([
            'id' => 6,
            'name' => 'Hero',
            'artwork_num' => 2,
            'title' => 'ｔeｓto',
            'comment' => 'ｃoｍｍeｎt',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('artworks')->insert([
            'id' => 7,
            'name' => 'Hero',
            'artwork_num' => 3,
            'title' => 'Hello World!',
            'comment' => 'See You World!',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('artworks')->insert([
            'id' => 8,
            'name' => 'qlfa',
            'artwork_num' => 2,
            'title' => 'test1',
            'comment' => 'comment1',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('artworks')->insert([
            'id' => 9,
            'name' => 'qlfa',
            'artwork_num' => 3,
            'title' => '驚きの結末',
            'comment' => 'しょぼい',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('artworks')->insert([
            'id' => 10,
            'name' => 'Hero',
            'artwork_num' => 4,
            'title' => 'てすと',
            'comment' => 'こめんと',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('artworks')->insert([
            'id' => 11,
            'name' => 'kk',
            'artwork_num' => 3,
            'title' => 't',
            'comment' => 'c',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('artworks')->insert([
            'id' => 12,
            'name' => 'Hero',
            'artwork_num' => 5,
            'title' => 'test1',
            'comment' => 'comment1',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
    }
}

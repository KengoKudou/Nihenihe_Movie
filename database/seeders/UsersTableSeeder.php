<?php

namespace Database\Seeders;

use App\Models\User;
use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Master',
            'email' => 'Master@example.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(60),
            'email_token' => Str::random(36),
            'verified' => 1,
            'sent_at' => new DateTime(),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);

        DB::table('users')->insert([
            'name' => 'qlfa',
            'email' => 'qlfa@example.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(60),
            'email_token' => Str::random(36),
            'verified' => 1,
            'sent_at' => new DateTime(),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);

        DB::table('users')->insert([
            'name' => 'Hero',
            'email' => 'hero@example.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(60),
            'email_token' => Str::random(36),
            'verified' => 1,
            'sent_at' => new DateTime(),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);

        DB::table('users')->insert([
            'name' => 'KK',
            'email' => 'kk@example.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(60),
            'email_token' => Str::random(36),
            'verified' => 1,
            'sent_at' => new DateTime(),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);

        User::factory(3)->create();
    }
}

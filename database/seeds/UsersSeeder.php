<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'name' => 'admin',
                'email' => 'a@a.ru',
                'email_verified_at' => now(),
                'password' => bcrypt(12345678),
                'remember_token' => Str::random(10),
            ],
            [
                'id' => 2,
                'name' => 'user',
                'email' => 'u@u.ru',
                'email_verified_at' => now(),
                'password' => bcrypt(12345678),
                'remember_token' => Str::random(10),
            ],
            [
                'id' => 3,
                'name' => 'sasha',
                'email' => 'admin@admin.ru8',
                'email_verified_at' => now(),
                'password' => bcrypt(12345678),
                'remember_token' => Str::random(10),
            ],
            [
                'id' => 4,
                'name' => 'masha',
                'email' => 'admin@admin.ru9',
                'email_verified_at' => now(),
                'password' => bcrypt(12345678),
                'remember_token' => Str::random(10),
            ],
            [
                'id' => 5,
                'name' => 'pasha',
                'email' => 'admin@admin.ru10',
                'email_verified_at' => now(),
                'password' => bcrypt(12345678),
                'remember_token' => Str::random(10),
            ],
            [
                'id' => 6,
                'name' => 'misha',
                'email' => 'admin@admin.ru11',
                'email_verified_at' => now(),
                'password' => bcrypt(12345678),
                'remember_token' => Str::random(10),
            ],
            [
                'id' => 7,
                'name' => 'dasha',
                'email' => 'admin@admin.ru12',
                'email_verified_at' => now(),
                'password' => bcrypt(12345678),
                'remember_token' => Str::random(10),
            ],
            [
                'id' => 8,
                'name' => 'olia',
                'email' => 'admin@admin.ru13',
                'email_verified_at' => now(),
                'password' => bcrypt(12345678),
                'remember_token' => Str::random(10),
            ],
            [
                'id' => 9,
                'name' => 'kolia',
                'email' => 'admin@admin.ru14',
                'email_verified_at' => now(),
                'password' => bcrypt(12345678),
                'remember_token' => Str::random(10),
            ],
            [
                'id' => 10,
                'name' => 'oleg',
                'email' => 'admin@admin.ru15',
                'email_verified_at' => now(),
                'password' => bcrypt(12345678),
                'remember_token' => Str::random(10),
            ],
            [
                'id' => 11,
                'name' => 'ira',
                'email' => 'admin@admin.ru16',
                'email_verified_at' => now(),
                'password' => bcrypt(12345678),
                'remember_token' => Str::random(10),
            ],
            [
                'id' => 12,
                'name' => 'nastia',
                'email' => 'admin@admin.ru17',
                'email_verified_at' => now(),
                'password' => bcrypt(12345678),
                'remember_token' => Str::random(10),
            ],
        ];
        DB::table('users')->insert($data);
    }
}

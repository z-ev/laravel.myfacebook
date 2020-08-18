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

            'id' => 1,
            'name' => 'admin',
            'email' => 'a@a.ru',
            'email_verified_at' => now(),
            'password' => bcrypt(12345678),
        ];

        DB::table('users')->insert($data);
        factory('App\User',12)->create();
    }
}

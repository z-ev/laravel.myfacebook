<?php

use Illuminate\Database\Seeder;

class UserImages extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        for($i=1; $i<=12; $i++) {
            array_push($data, [

                    'user_id' => $i,
                    'width' => '350',
                    'height' => '350',
                    'path' => '../files/img/users/profile/'.$i.'.png',
                    'location' => 'profile',


            ]);
        }

        DB::table('user_images')->insert($data);
    }
}

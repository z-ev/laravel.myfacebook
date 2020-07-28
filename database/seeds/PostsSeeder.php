<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Generator as Faker;

use Carbon\Carbon;


class PostsSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];




        $faker = \Faker\Factory::create();

        for($i=1; $i<=12; $i++) {
            for ($j = 1; $j <= 5; $j++) {

                $newdtata = [
                    'user_id' => $i,
                    'body' => $faker->paragraph,
                    'image' => '/files/img/' . intval($j) . '.jpg',
                    'created_at' => Carbon::now(),
                ];
                array_push($data, $newdtata);


            }
        }

        DB::table('posts')->insert($data);

    }
}

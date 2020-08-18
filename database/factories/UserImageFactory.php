<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\User;
use App\UserImage;
use Faker\Generator as Faker;

$factory->define(UserImage::class, function (Faker $faker) {
    static $user_id = 1;
    return [
        'user_id' => $user_id++,
        'width' => '350',
        'height' => '350',
        'path' =>  $faker->imageUrl(),
        'location' => 'profile',
   ];
});


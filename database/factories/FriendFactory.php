<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\User;
use App\Friend;
use Faker\Generator as Faker;

$factory->define(Friend::class, function (Faker $faker) {
    static $user_id = 1;
    return [
        'user_id' => $user_id++,
        'friend_id' => User::all()->random()->id,
        'confirmed_at' => now(),
        'status' => '1',
    ];
});

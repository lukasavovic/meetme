<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Option::class, function (Faker $faker) {
    return [
        "title" => $faker->word(),
        'vote' => $faker->numberBetween(1,20),
        'poll_id'=> $faker->numberBetween(1,19),
    ];
});

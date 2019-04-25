<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Poll::class, function (Faker $faker) {
    return [
        'title'=>$faker->word(),
        'description'=>$faker->sentence(5, true),
        'open'=>$faker->boolean(),
        'user_id'=>$faker->numberBetween(1,20)
    ];
});

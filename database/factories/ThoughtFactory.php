<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Thought;
use Faker\Generator as Faker;

$factory->define(Thought::class, function (Faker $faker) {
    return [
        // post
        'post' => $faker->sentence,
        'author' => $faker->firstName
    ];
});

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Thought;
use Faker\Generator as Faker;

$factory->define(Thought::class, function (Faker $faker) {
    return [
        // A thought includes content and an author
        'content' => $faker->sentence,
        'author' => $faker->firstName
    ];
});

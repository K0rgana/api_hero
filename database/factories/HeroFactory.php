<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Hero;
use Faker\Generator as Faker;

$factory->define(Hero::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'alias' => $faker->userName,
        'power' => $faker->jobTitle,
    ];
});

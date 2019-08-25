<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Dept;
use Faker\Generator as Faker;

$factory->define(Dept::class, function (Faker $faker) {
    return [
      'client_id' => $faker->numberBetween(1, 50),
     'value' => $faker->numberBetween(100, 4000),
    ];
});

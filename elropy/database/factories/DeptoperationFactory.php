<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\DeptOperation;
use Faker\Generator as Faker;

$factory->define(DeptOperation::class, function (Faker $faker) {
    return [
      'user_id' => $faker->numberBetween(1, 50),
      'value' => $faker->numberBetween(100, 4000),
      'remain' => $faker->numberBetween(1, 2000),
    ];
});

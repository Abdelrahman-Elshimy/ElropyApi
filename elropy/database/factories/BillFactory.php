<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Bill;
use Faker\Generator as Faker;

$factory->define(Bill::class, function (Faker $faker) {
    return [
      'user_id' => $faker->numberBetween(1, 50),
      'value' => $faker->numberBetween(100, 4000),
      'buyed' => $faker->numberBetween(1, 2000),
      'depts_value' => $faker->numberBetween(1, 2000),
    ];
});

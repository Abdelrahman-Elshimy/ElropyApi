<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
      'name' => $faker->name,
    'unit_count' => $faker->numberBetween(1, 100),
    'unit_price' => $faker->numberBetween(1, 100),
    'box_count' => $faker->numberBetween(1, 100),
    'box_price' => $faker->numberBetween(1, 100),
    'container_count' => $faker->numberBetween(1, 100),
    'container_price' => $faker->numberBetween(1, 100),
    'price' => $faker->numberBetween(1, 400),
    'client_id' => $faker->numberBetween(1, 50),
    'bill_id' => $faker->numberBetween(1, 5),
    ];
});

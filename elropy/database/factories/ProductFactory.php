<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Product;

$factory->define(Product::class, function (Faker $faker) {
    return [
      'name' => $faker->name,
      'unit_count' => $faker->numberBetween(1, 100),
      'unit_price' => $faker->numberBetween(1, 100),
      'box_count' => $faker->numberBetween(1, 100),
      'box_price' => $faker->numberBetween(1, 100),
      'container_count' => $faker->numberBetween(1, 100),
      'container_price' => $faker->numberBetween(1, 100),
    ];
});

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->name,
        'address' => "الرياض",
        'mobile' => "01124841951",
    ];
});

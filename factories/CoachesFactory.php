<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Coach;
use Faker\Generator as Faker;

$factory->define(Coach::class, function (Faker $faker) {
    return [
      'firstname' => $faker->firstName(),
      'lastname' => $faker->lastName(),
      'age' => $faker->numberBetween(20, 70),
      'address' => $faker->address(),
      'years_at_club' => $faker->randomDigit(),
    ];
});

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Player;
use Faker\Generator as Faker;

$factory->define(Player::class, function (Faker $faker) {
    return [
      'firstname' => $faker->firstName(),
      'lastname' => $faker->lastName(),
      'age' => $faker->numberBetween(17, 40),
      'position' => $faker->randomElement(['striker','midfield','defence','goalkeeper']),
      'address' => $faker->address(),
      'coaches_id'=>App\Coach::inRandomOrder()->first()->id,
    ];
});

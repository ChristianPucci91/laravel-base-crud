<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use Faker\Generator as Faker;
use App\Peripheral;

$factory->define(Peripheral::class, function (Faker $faker) {
    return [

      'name'        => $faker -> word,
      'model'       => $faker -> swiftBicNumber,
      'price'       => $faker -> biasedNumberBetween($min = 1, $max = 2000, $function = 'sqrt') / 100,
      'consumption' => $faker -> biasedNumberBetween($min = 0, $max = 200,  $function = 'sqrt') / 100,

    ];
});

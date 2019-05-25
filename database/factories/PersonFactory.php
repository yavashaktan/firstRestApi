<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Person;
use Faker\Generator as Faker;

$factory->define(Person::class, function (Faker $faker) {
    return [
        'firstName' => $faker->firstName,
        'lastName' => $faker->lastName,
        'gsm' => $faker->phoneNumber,
        'email' => $faker->safeEmail,
        'city' => $faker->city,
    ];
});

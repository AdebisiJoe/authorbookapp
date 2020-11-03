<?php

use Faker\Generator as Faker;

$factory->define(App\property::class, function (Faker $faker) {
    return [
        'name' => $faker->Name,
    ];
});

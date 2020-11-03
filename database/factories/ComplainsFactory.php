<?php

use Faker\Generator as Faker;

$factory->define(App\Complains::class, function (Faker $faker) {
    return [
           
        'userid' => $faker->numberBetween(1,30),
        'category_id' => $faker->numberBetween(1,5),
        'ticket_id'=>$faker->unique()->randomNumber($nbDigits = 8),
        'title' => $faker->sentence,
        'priority' =>$faker->high,
        'message'=>$faker->paragraph,
        'status'=>'open',
        
    ];
});

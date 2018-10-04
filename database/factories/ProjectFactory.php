<?php

use Faker\Generator as Faker;
use App\User;

$factory->define(App\Project::class, function (Faker $faker) {
    return [
        'owner_id' => function(){
            return User::all()->random();
        },
        'manager_id' => function(){
            return User::all()->random();
        },
        'name' => $faker->word,
        'desc' => $faker->sentence,
        'start_at' => $faker->date(),
        'end_at' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now'),
        'budget' => $faker->randomNumber()
    ];
});

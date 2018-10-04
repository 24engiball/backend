<?php

use Faker\Generator as Faker;
use App\Sprint;

$factory->define(App\Task::class, function (Faker $faker) {
    $sprint_random = Sprint::all()->random();
    $project_member_random = \App\ProjectMember::all()->where('user_id','=',$sprint_random->user_id)->where('project_id','=',$sprint_random->project_id)->random();
    return [
        'user_id' => $sprint_random->user_id,
        'sprint_id' => $sprint_random,
        'approve_user_id' => $project_member_random,
        'name' => $faker->word,
        'desc' => $faker->sentence,
        'howto' => $faker->sentence,
        'start_at' => $faker->date(),
        'end_at' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now'),
        'timespending' => $faker->randomNumber()
    ];
});

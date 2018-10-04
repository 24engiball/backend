<?php

use Faker\Generator as Faker;
use App\User;
use App\Project;
use App\ProjectMember;

$factory->define(App\Sprint::class, function (Faker $faker) {
    $project_id = Project::all()->random();
    return [
        'project_id' => $project_id,
        'user_id' => ProjectMember::all()->where('project_id','=',$project_id->id)->pluck('user_id')->random(),
        'name' => $faker->word,
        'desc' => $faker->sentence,
    ];
});

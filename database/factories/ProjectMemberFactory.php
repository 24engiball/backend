<?php

use Faker\Generator as Faker;
use App\User;
use App\Project;

$factory->define(App\ProjectMember::class, function (Faker $faker) {
    return [
        'user_id' => function(){
            return User::all()->random();
        },
        'project_id' => function(){
            return Project::all()->random();
        },
    ];
});

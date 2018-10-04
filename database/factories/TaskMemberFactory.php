<?php

use Faker\Generator as Faker;
use App\Task;
use App\User;

$factory->define(App\TaskMember::class, function (Faker $faker) {
    $task_random = Task::all()->random();
    //$project_member_random = \App\ProjectMember::all()->where('user_id','=',$task_random->user_id)->where('project_id','=',$sprint_random->project_id)->random();

    return [
        'task_id' => Task::all()->random(),
        'user_id' => ''
    ];
});

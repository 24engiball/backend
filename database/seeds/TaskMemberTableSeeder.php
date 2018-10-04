<?php

use Illuminate\Database\Seeder;

class TaskMemberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\TaskMember', 150)->create();
    }
}

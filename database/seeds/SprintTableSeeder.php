<?php

use Illuminate\Database\Seeder;

class SprintTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Sprint', 60)->create();
    }
}

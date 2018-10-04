<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(HelloTableSeeder::class);
        $this->call(ProjectTableSeeder::class);
        $this->call(ProjectMemberTableSeeder::class);
        $this->call(SprintTableSeeder::class);
        //$this->call(TaskTableSeeder::class);
        //$this->call(TaskMemberTableSeeder::class);
    }
}

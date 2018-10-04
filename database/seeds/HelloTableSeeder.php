<?php

use Illuminate\Database\Seeder;

class HelloTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hello')->insert([
            'title' => 'Hello World',
            'body' => 'eiei',
        ]);
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('sprint_id');
            $table->integer('approve_user_id');
            $table->string('name');
            $table->text('desc');
            $table->text('howto');
            $table->dateTime('start_at');
            $table->dateTime('end_at');
            $table->integer('timespending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('task');
    }
}

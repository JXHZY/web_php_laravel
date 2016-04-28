<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Todos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
            $table->date('published_date');
            $table->date('scheduled_date');
            $table->enum('status',['Not Started','Started','Mid-way','Completed']);
            $table->string('owner');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('owner')
                  ->references('email')
                  ->on('users')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('todos');
    }
}

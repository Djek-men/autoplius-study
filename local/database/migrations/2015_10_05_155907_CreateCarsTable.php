<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars',function($table){
            $table->increments('id');
            $table->string('marke');
            $table->string('model');
            $table->integer('user_id');
            $table->text('description');
            $table->string('photo_path');
            $table->integer('price');
            $table->timestamps();
            $table->string('picture');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cars');
    }
}

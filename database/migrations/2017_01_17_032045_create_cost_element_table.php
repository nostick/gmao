<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCostElementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cost_elements', function (Blueprint $table) {
            $table->increments('id');

            $table->string('level');
            $table->string('name');
            $table->string('slug');
            $table->string('required')->nulable();
            $table->integer('quantity')->unsigned();
            $table->integer('cost')->unsigned();
            $table->integer('intensity')->unsigned();
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
        //
    }
}

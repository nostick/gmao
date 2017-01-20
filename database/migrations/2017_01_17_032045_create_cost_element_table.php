<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateCostElementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::create('cost_elements', function (Blueprint $table) {
            $table->increments('id');

            $table->string('level');
            $table->string('name');
            $table->string('slug');
            $table->string('required')->nulable();
            $table->integer('quantity')->unsigned();
            $table->integer('cost')->unsigned();
            $table->integer('intensity')->unsigned();
            $table->integer('system_id')->unsigned()->nullable();
            $table->foreign('system_id')->references('id')->on('systems')->onDelete('cascade');
            $table->integer('sub_system_id')->unsigned()->nullable();
            $table->foreign('sub_system_id')->references('id')->on('sub_systems')->onDelete('cascade');
            $table->timestamps();
        });
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
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

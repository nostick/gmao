<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndicatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indicators', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('equipment_id')->unsigned()->nullable();
            $table->foreign('equipment_id')->references('id')->on('equipments')->onDelete('cascade');
            $table->integer('system_id')->unsigned()->nullable();
            $table->foreign('system_id')->references('id')->on('systems')->onDelete('cascade');
            $table->integer('sub_system_id')->unsigned()->nullable();
            $table->foreign('sub_system_id')->references('id')->on('sub_systems')->onDelete('cascade');

            $table->string('name');
            $table->string('slug');
            $table->integer('Z');
            $table->integer('UM');
            $table->integer('N');

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
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('indicators');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSystemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('systems', function (Blueprint $table) {
           $table->increments('id');
           $table->string('name');
           $table->integer('equipment_id')->unsigned();
           $table->foreign('equipment_id')->references('id')->on('equipments')->onDelete('cascade');
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
        Schema::dropIfExists('systems');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}

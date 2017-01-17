<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCostLifeCicle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('llc', function (Blueprint $table) {
            $table->increments('id');

            $table->string('condition');
            $table->string('slug');
            $table->string('mean');
            $table->float('value');
            $table->string('value_unit');
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

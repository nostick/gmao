<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyReparationOnCorrectivesReparationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        Schema::table('correctives_reparations', function ($table) {
            $table->dropColumn('reparation');
            $table->integer('fault_id')->unsigned()->nullable();
            $table->foreign('fault_id')->references('id')->on('faults')->onDelete('cascade');
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

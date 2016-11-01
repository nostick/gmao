<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDurationToCorrectiveMaintenance extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        Schema::table('correctives_reparations', function (Blueprint $table) {
            $table->integer('duration_days')->after('sub_system_id')->nullable();
            $table->integer('duration_time')->after('duration_days')->nullable();
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

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForgottenKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('facility_units', function($table) {
            $table->foreign('facilities_id')->references('id')->on('facilities');
        });
        Schema::table('reservations', function($table) {
            $table->foreign('facility_unit_id')->references('id')->on('facility_units');
        });
        Schema::table('reservations', function($table) {
            $table->foreign('users_id')->references('id')->on('users');
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

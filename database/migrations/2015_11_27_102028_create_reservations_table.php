<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {Schema::create('reservations', function(Blueprint $table) { 
        $table->increments('id');
        $table->integer('facility_unit_id')->unsigned();
        $table->integer('users_id')->unsigned();
            $table->string('date from')->nullable();
            $table->string('date to')->nullable();
            
             $table->boolean('active');
            $table->timestamps();
    });
Schema::table('reservations', function($table) {
    $table->foreign('facility_unit_id')->references('id')->on('facility_units');
});
Schema::table('reservations', function($table) {
    $table->foreign('users_id')->references('id')->on('users');
});

    }
    public function down()
    {
      Schema::drop('reservations');    //
    }
}

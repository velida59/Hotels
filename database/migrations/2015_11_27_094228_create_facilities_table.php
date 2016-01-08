<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{ Schema::create('facilities', function(Blueprint $table) { 
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->string('address',500)->nullable();
            $table->string('city',100)->nullable();
            $table->string('postno',10)->nullable();
            $table->string('fax',30)->nullable();
            $table->string('web',50)->nullable();
            $table->string('email',50)->nullable();
            $table->string('phone',30)->nullable();
            $table->string('country',100)->nullable();
            $table->boolean('active');
            $table->timestamps();
 

        //
} );
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('facilities');  //
    }
}

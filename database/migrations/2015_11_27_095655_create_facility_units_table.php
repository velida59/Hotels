
<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacilityUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {Schema::create('facility_units', function(Blueprint $table) { 
        $table->increments('id');
        $table->integer('facilities_id')->unsigned();
            $table->string('type')->nullable();
            $table->string('description')->nullable();
            $table->string('bedNo',10)->nullable(); 
            $table->boolean('active');
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
    Schema::drop('facility_units');
        //
    }
}

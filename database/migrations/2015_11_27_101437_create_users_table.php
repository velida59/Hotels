<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {Schema::create('users', function(Blueprint $table) { 
        $table->increments('id');
            $table->string('user_type')->nullable();
            $table->string('name')->nullable();
            $table->string('email',50)->nullable(); 
            $table->string('password',60)->nullable(); 
             $table->boolean('active');
            $table->timestamps();
        //
    });
    
    }
    
    public function down()
    {
       Schema::drop('users');  //
    }
}

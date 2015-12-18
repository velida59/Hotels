<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
  protected $table = 'Users';
 
    protected $fillable = ['id', 'name', 'email', 'phone', 'country'];
  //
}

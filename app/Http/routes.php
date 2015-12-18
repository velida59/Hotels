<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    
    return view('welcome');
});
Route::get('facilities', function() {
    return view('facilities')->with('description', 'Description');
});
Route::get('facilityunits', function() {
    return view('facilityunits')->with('type', 'Type');
});


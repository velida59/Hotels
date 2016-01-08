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
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


Route::controllers([
   'password' => 'Auth\PasswordController',
]);



 Route::get('home', 'FacilityController@index');
 Route::get('facility/{$id}', 'FacilityController@show');
  // route to show the login form
  Route::get('login', array('uses' => 'HomeController@showLogin'));
  
 // route to process the form
 Route::post('login', array('uses' => 'HomeController@doLogin'));
 
 Route::get('logout', array('uses' => 'HomeController@doLogout'));

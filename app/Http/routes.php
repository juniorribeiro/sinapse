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

Route::get('/', ["as"      => "home", "uses"      => "fastersController@index"]);
Route::get('/admin', ["as" => "fasters.admin", "uses" => "fastersController@admin"]);
//Route::get('/admin', ["as"  => "users.admin", "uses"  => "usersController@admin"]);
Route::get('/delete', ["as" => "fasters.delete", "uses" => "fastersController@destroy"]);
//Route::get('/users', ["as"  => "users.index", "uses"  => "usersController@index"]);
//Route::post('/add', ["as" => "users.add", "uses" => "usersController@store"]);
Route::resource('fasters', 'fastersController');
Route::resource('users', 'usersController');
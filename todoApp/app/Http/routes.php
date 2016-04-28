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

Route::get('welcome', 'sitesController@welcome');
Route::get('/', 'sitesController@login');
Route::get('register', 'sitesController@register');

Route::get('home', 'todosController@showTodos');
Route::post('home','todosController@handleTodos');

Route::post('login','loginAuthController@checkLogin');
Route::get('logout','loginAuthController@logout');
Route::post('register','registerController@create');

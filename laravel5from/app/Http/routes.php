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

Route::group(['midleware'=>['web']],function(){
	Route::get('begin',function(){
		flash('You are now signed in!','success');
		// session()->flash('flash_message','You are now logged in.');
		// session()->flash('flash_message_level','success');
		return redirect('/');
	});

	Route::get('/',function(){
		//Session::flash('status','Hello There');
		return view('welcome');
	});
	// Route::get('/','PagesController@home');
	Route::get('about','PagesController@about');

	Route::get('cards','CardsController@index');
	Route::get('cards/{card}','CardsController@show');
	Route::post('cards/{card}/notes','NotesController@store');
	Route::get('/notes/{note}/edit','NotesController@edit');
	Route::patch('notes/{note}','NotesController@update');
	Route::auth();
	Route::get('/dashboard', 'HomeController@index');
	Route::get('/home', 'HomeController@index');
});

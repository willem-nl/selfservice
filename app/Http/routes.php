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

Route::get('/', 'HomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::group(['prefix' => 'gebruikers/'], function(){
	Route::get('gebruikers', function(){
		return view('pages.gebruikers.gebruikers');
	});
	Route::get('groepen', function(){
		return view('pages.gebruikers.groepen');
	});
});

Route::get('applicaties', function(){
	return view('pages.applicaties');
});

Route::group(['prefix' => 'opslag/'], function(){
	Route::get('statistiek', function(){
		return view('pages.opslag.statistiek');
	});
	Route::get('groepsschijf', function(){
		return view('pages.opslag.groepsschijf');
	});
	Route::get('samenwerkschijf', function(){
		return view('pages.opslag.samenwerkschijf');
	});
});

Route::get('printers', function(){
	return view('pages.printers');
});

Route::get('webstart', function(){
	return view('pages.webstart.index');
});

Route::get('rollen', 'PagesController@rollen');
Route::get('software', 'PagesController@software');
Route::get('favorieten', 'PagesController@favorieten');

Route::get('instellingen', 'PagesController@instellingen');
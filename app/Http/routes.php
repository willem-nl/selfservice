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

use Illuminate\Support\Facades\Blade;

Blade::setContentTags('<%', '%>');
Blade::setEscapedContentTags('<%%', '%%>');

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

Route::get('tree', 'TreeController@createTree');

Route::get('rollen', 'PagesController@rollen');
Route::get('software', 'PagesController@software');


Route::group(['prefix' => 'instellingen/'], function(){
	Route::get('klant/algemeen', function(){
		return view('pages.instellingen.klant.algemeen');
	});
	Route::get('klant/favorieten', function(){
		return view('pages.instellingen.klant.favorieten');
	});
});

Route::group(['prefix' => 'webstart/'], function(){

	Route::get('/', function(){
		return view('pages.webstart.index');
	});

	Route::get('beheer', function(){
		return view('pages.webstart.beheer');
	});

	Route::resource('categories', 'CategoryController');
	Route::resource('items', 'ItemController');
	Route::resource('browsers', 'BrowserController');

});
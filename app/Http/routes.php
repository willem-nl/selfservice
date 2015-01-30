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

Route::get('gebruikers', 'PagesController@gebruikers');
Route::get('groepen', 'PagesController@groepen');
Route::get('applicaties', 'PagesController@applicaties');
Route::get('groepsschijf', 'PagesController@groepsschijf');
Route::get('printers', 'PagesController@printers');
Route::get('rollen', 'PagesController@rollen');
Route::get('software', 'PagesController@software');
Route::get('favorieten', 'PagesController@favorieten');
Route::get('instellingen', 'PagesController@instellingen');
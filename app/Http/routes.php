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

Route::get('/', 'PagesController@index');

Route::get('home', 'DashController@home');

Route::get('dash/dates', 'DashController@dates');
Route::post('dash/create', 'DashController@create');
Route::post('dash/edit/{id}', 'DashController@update');

Route::resource('permisos', 'PermsController');

Route::resource('tribunal', 'TribunalesController');

Route::resource('usuarios', 'UserController');
Route::get('usuarios/setstatus/{id}', 'UserController@setStatus');

Route::resource('roles', 'RolesController');

Route::resource('clientes', 'ClientesController');

Route::resource('contactos', 'ContactosController');

Route::resource('casos', 'CasosController');

Route::controllers([
	'auth' 		=> 'Auth\AuthController',
	'password' 	=> 'Auth\PasswordController',
	'listados'	=> 'ListadosController',
	'contactos-relacionados' => 'ClientescontactosController',
	'actualizaciones' => 'ActualizacioncasosController',
]);
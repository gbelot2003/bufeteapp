<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function ($faker) {
	return [
		'userstatus_id' => 1,
		'name' => 'Gerardo Belot',
		'email' => 'gbelot2003@hotmail.com',
		'password' => bcrypt('Luna0102'),
		'remember_token' => str_random(10),
	];
});

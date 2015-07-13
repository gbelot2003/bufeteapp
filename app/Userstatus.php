<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userstatus extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'userstatuses';

	/**
	 * @var bool
	 */
	public $timestamps = false;

	/**
	 * Un status tiene varios usuarios
	 * @return \Illuminate\Database\Eloquent\Relations\hasOne
	 */
	public function users()
	{
		return $this->hasOne('App\User');
	}
}

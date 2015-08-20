<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tribunale extends Model
{
	/**
	 * @var string
	 */
	protected $table = 'tribunales';

	/**
	 * portected fillable
	 * @var array
	 */
	protected $fillable = ['name'];

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasOne
	 */
	public function casos()
	{
		return $this->hasOne('App\Caso');
	}
}

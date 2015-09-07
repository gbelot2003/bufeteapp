<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
	/**
	 * @var string
	 */
	protected $table = 'salas';

	/**
	 * @var bool
	 */
	public $timestamps = false;

	/**
	 * Un municipio puede tener varios establecimientos
	 * @return \Illuminate\Database\Eloquent\Relations\HasOne
	 */
	public function casos()
	{
		return $this->hasOne('App\Caso', 'salas_id', 'id');
	}
}

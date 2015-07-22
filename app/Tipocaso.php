<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipocaso extends Model
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'tipo_casos';

	/**
	 * @var null
	 */
	public $timestamps = null;

	public function casos()
	{
		return $this->hasMany('App\Caso', 'tipocaso_id', 'id');
	}
}

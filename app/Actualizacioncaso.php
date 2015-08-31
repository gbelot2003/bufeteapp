<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actualizacioncaso extends Model
{
	/**
	 * @var string
	 */
	protected $table = 'actualizacioncasos';

	/**
	 * portected fillable
	 * @var array
	 */
	protected $fillable = ['caso_id', 'descripcion', 'importancia', 'date'];

	/**
	 * Describe relación con casos
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function casos()
	{
		return $this->belongsTo('App\Caso', 'caso_id', 'id');
	}

	/**
	 * Relacion con usuarios
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function users()
	{
		return $this->belongsTo('App\User', 'user_id', 'id');
	}

}

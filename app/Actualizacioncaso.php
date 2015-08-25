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
	protected $fillable = ['caso_id', 'title', 'tipocaso_id', 'tipojuicio',
							'tribunal_id', 'instancia', 'salas_id', 'juez_id',
							'descripcion', 'date'];

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

	/**
	 * Relacion con tipocaso
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function tipocasos()
	{
		return $this->belongsTo('App\Tipocaso', 'tipocaso_id', 'id');
	}

	/**
	 * Relacion con jueces
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function jueces()
	{
		return $this->belongsTo('App\Contacto', 'juez_id', 'id');
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function tribunales()
	{
		return $this->belongsTo('App\Tribunale', 'tribunales_id', 'id');
	}
}

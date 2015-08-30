<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CasoDemandante extends Model
{
	/**
	 * @var string
	 */
	protected $table = 'casos_demandantes';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['casos_id', 'contacto_id'];

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function casos(){
		return $this->belongsTo('App\Caso', 'casos_id', 'id');
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function contactos(){
		return $this->belongsTo('App\Contacto', 'contacto_id', 'id');
	}
}

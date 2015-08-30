<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CasoTerceria extends Model
{
	/**
	 * @var string
	 */
	protected $table = 'casos_tercerias';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['casos_id', 'contacto_id', 'tipoterceria_id'];

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function casos()
	{
		return $this->belongsTo('App\Caso', 'casos_id', 'id');
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function contactos()
	{
		return $this->belongsTo('App\Contacto', 'contacto_id', 'id');
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function tipotercerias()
	{
		return $this->belongsTo('App\TipoTerceria', 'tipoterceria_id', 'id');
	}

}

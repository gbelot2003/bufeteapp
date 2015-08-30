<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoTerceria extends Model
{
	/**
	 * @var string
	 */
	protected $table = 'tipo_tercerias';

	/**
	 * @var bool
	 */
	public $timestamps = false;

	/**
	 * Relacion con Casosterceria
	 * @return \Illuminate\Database\Eloquent\Relations\HasOne
	 */
	public function casoTercerias()
	{
		return $this->hasOne('App\CasoTerceria', 'tipoterceria_id', 'id');
	}
}

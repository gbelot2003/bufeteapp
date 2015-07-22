<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
	/**
	 * @var string
	 */
	protected $table = 'municipios';

	/**
	 * @var bool
	 */
	public $timestamps = false;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['departamento_id', 'municipio'];

	/**
	 * Un Municipio pertence a un Departamento
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function departamento()
	{
		return $this->belongsTo('App\Departamento');
	}

	/**
	 * Un municipio puede tener varios establecimientos
	 * @return \Illuminate\Database\Eloquent\Relations\HasOne
	 */
	public function casos()
	{
		return $this->hasOne('App\Caso');
	}
}

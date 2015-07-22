<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
	/**
	 * @var string
	 */
	protected $table = 'departamentos';

	/**
	 * @var bool
	 */
	public $timestamps = false;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['departamento'];

	/**
	 * A Departamento tiene muchos Municipios
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function municipios()
	{
		return $this->hasMany('App\Municipio');
	}

	/**
	 * Un departamento tiene muchas sucursales
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasOne
	 */
	public function casos()
	{
		return $this->hasOne('App\Caso');
	}
}

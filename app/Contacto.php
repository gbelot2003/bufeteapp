<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'contactos';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['type', 'name', 'cargo', 'notes', 'phone', 'movil', 'email'];

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function clientes()
	{
		return $this->belongsToMany('App\Cliente')->withTimestamps();
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function casos()
	{
		return $this->belongsToMany('App\Caso')->withTimestamps();
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function contrapartes()
	{
		/**
		 * Relacion atraves de casos_contrapartes
		 */
		return $this->hasMany('App\CasosContraparte', 'contacto_id', 'id');
	}

}

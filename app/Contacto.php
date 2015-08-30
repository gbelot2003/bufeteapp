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
	public function demandados()
	{
		/**
		 * Relacion atraves de casos_demandados
		 */
		return $this->hasMany('App\CasosDemandados', 'contacto_id', 'id');
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function demandantes()
	{
		/**
		 * Relacion atraves de casos_demandantes
		 */
		return $this->hasMany('App\CasosDemandantes', 'contacto_id', 'id');
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function tercerias()
	{
		return $this->hasMany('App\CasoTerceria', 'contacto_id', 'id');
	}
}

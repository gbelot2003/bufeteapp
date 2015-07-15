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

}

<?php

namespace App;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;

class Caso extends Model implements SluggableInterface
{

	/**
	 * Slugable
	 */
	use SluggableTrait;

	/**
	 * @var string
	 */
	protected $table = 'casos';

	protected $sluggable = [
		'build_from' => 'caso',
		'save_to'    => 'slug',
	];

	/**
	 * portected fillable
	 * @var array
	 */
	protected $fillable = ['caso', 'cliente_id', 'tipocaso_id', 'tipojuicio', 'tribunal', 'demandado', 'demandante'
							, 'juez_id', 'csj', 'ca', 'descripcion', 'tribunales_id', 'estado'];

	/**
	 * Relacion con usuarios
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function users()
	{
		return $this->belongsTo('App\User', 'user_id', 'id');
	}

	/**
	 * relacion con clientes
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function clientes()
	{
		return $this->belongsTo('App\Cliente', 'cliente_id', 'id');
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
	 * Relacion con tipocaso
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function tipocasos()
	{
		return $this->belongsTo('App\Tipocaso', 'tipocaso_id', 'id');
	}

	public function actualizaciones()
	{
		return $this->hasMany('App\ActualizacionCasos');
	}

	public function tribunal()
	{
		return $this->belongsTo('App\Tribunale', 'tribunales_id', 'id');
	}

}

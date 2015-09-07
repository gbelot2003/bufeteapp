<?php

namespace App;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;

class Caso extends Model implements SluggableInterface {

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
		'save_to' => 'slug',
	];

	/**
	 * portected fillable
	 * @var array
	 */
	protected $fillable = ['caso', 'cliente_id', 'tipocaso_id', 'tipojuicio', 'tribunal_id', 'instancia', 'salas_id',
		'juez_id', 'csj', 'ca', 'estado', 'honorarios', 'user_id'];

	/**
	 * @param $estado
	 * @return bool
	 */
	public function getEstadoAttribute($estado)
	{
		return (bool)$estado;
	}

	/**
	 * @param $estado
	 * @return string
	 */
	public function estadoTrans($estado)
	{
		if ($estado == 1)
		{
			return 'Abierto';
		}

		return 'cerrado';
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
	 * relacion con clientes
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function clientes()
	{
		return $this->belongsTo('App\Cliente', 'cliente_id', 'id');
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function actualizaciones()
	{
		return $this->hasMany('App\Actualizacioncaso');
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
		/**
		 * Relacion directa con tabla contactos
		 */
		return $this->belongsTo('App\Contacto', 'juez_id', 'id');
	}

	/**
	 * Relacion contrapartes
	 * @return mixed
	 */
	public function contrapartes()
	{
		return $this->hasMany('App\CasosContraparte', 'caso_id', 'id')
				->where('tipo_contraparte', '=', 1)
				->orWhere('tipo_contraparte', '=', 2);
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function demandados()
	{
		/**
		 * Relacion atraves de casos_contrapartes
		 */
		return $this->hasMany('App\CasosContraparte', 'caso_id', 'id')
			->where('tipo_contraparte', '=', 2);
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function demandantes()
	{
		/**
		 * Relacion atraves de casos_contrapartes
		 */
		return $this->hasMany('App\CasosContraparte', 'caso_id', 'id')
			->where('tipo_contraparte', '=', 1);
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function tercerias()
	{
		/**
		 * Relacion atraves de casos_contrapartes
		 */
		return $this->hasMany('App\CasosContraparte', 'caso_id', 'id')
			->where('tipo_contraparte', '=', 3);
	}

	/**
	 * Chequear si existen filas desde la relación
	 * @return bool
	 */
	public function hasTercerias(){

		return (bool) $this->tercerias()->first();
	}

	/**
	 * Chequear si existen filas desde la relación
	 * @return bool
	 */
	public function hasDemandados(){

		return (bool) $this->demandados()->first();
	}

	/**
	 * Chequear si existen filas desde la relación
	 * @return bool
	 */
	public function hasDemandantes(){

		return (bool) $this->demandantes()->first();
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function tribunales()
	{
		return $this->belongsTo('App\Tribunale', 'tribunal_id', 'id');
	}


}

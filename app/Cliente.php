<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Cliente extends Model implements SluggableInterface
{
	use SluggableTrait;

	protected $sluggable = [
		'build_from' => 'name',
		'save_to'    => 'slug',
	];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'clientes';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'phone', 'movil', 'email', 'details'];

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function contactos()
	{
		return $this->belongsToMany('App\Contacto')->withTimestamps();
	}
}

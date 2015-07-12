<?php namespace App;

use Zizaco\Entrust\EntrustRole;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Role extends EntrustRole implements SluggableInterface{


	use SluggableTrait;

	protected $sluggable = [
		'build_from' => 'display_name',
		'save_to'    => 'name',
	];

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'display_name', 'description'];

	public function getPermsListsAttribute()
	{
		return $this->perms->lists('id');
	}

}

<?php namespace App;

use Zizaco\Entrust\EntrustPermission;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Permission extends EntrustPermission implements SluggableInterface{


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


	/**
	 * Return the Roles related to this permission
	 * @return a List of roles id
	 */
	public function getRolesListAttribute()
	{
		return $this->roles->list(id);
	}


}

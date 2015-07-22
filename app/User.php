<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword, EntrustUserTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['userstatus_id', 'name', 'email', 'password', 'userstatus_id'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

	/**
	 * Userstatus
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function userstatus()
	{
		return $this->belongsTo('App\Userstatus');
	}

	/**
	 * Un usuario se relaciona a un caso
	 * @return \Illuminate\Database\Eloquent\Relations\HasOne
	 */
	public function casos()
	{
		return $this->hasOne('App\Caso');
	}


}

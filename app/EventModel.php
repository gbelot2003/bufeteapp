<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use MaddHatter\LaravelFullcalendar\Event;


class EventModel extends Model {

	protected $table = 'event_models';

	protected $fillable = ['title', 'allday', 'start', 'start_hour', 'end', 'end_hour'];

	/**
	 * @param $all_day
	 * @return bool
	 */
	public function getAlldayAttribute($allday)
	{
		return (bool) $allday;
	}

	/**
	 * User relationship
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function users()
	{
		return $this->belongsTo('App\User', 'user_id', 'id');
	}

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EventModel;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class DashController extends Controller
{
    public function home()
	{
		return View('dash.home');
	}

	public function dates()
	{
		$dates = EventModel::all();
		return $dates;
	}

	public function create(Request $request)
	{
		EventModel::create($request->all());
		return 'done';
	}
}

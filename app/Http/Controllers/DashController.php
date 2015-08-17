<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\EventModel;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Event;


class DashController extends Controller
{
    public function home()
	{
		return View('dash.home');
	}

	public function create(Request $request)
	{
		EventModel::create($request->all());
		return 'done';
	}

	public function update(Request $request, $id){
		$event = EventModel::findOrFail($id);
		$event->update($request->all());

		return 'done';
	}
}

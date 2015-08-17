<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\EventModel;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Event;


class DashController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}

    public function home()
	{
		return View('dash.home');
	}

	public function create(Request $request)
	{
		$request['user_id'] = Auth::Id();
		EventModel::create($request->all());
		return 'done';
	}

	public function update(Request $request, $id){
		$event = EventModel::findOrFail($id);
		$event->update($request->all());

		return 'done';
	}
}

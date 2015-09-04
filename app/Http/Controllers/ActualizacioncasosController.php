<?php

namespace App\Http\Controllers;

use App\Actualizacioncaso;
use App\Caso;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class ActualizacioncasosController extends Controller
{
	public function getCreate($id)
	{
		// recargamos informacion del caso
		$caso = Caso::findOrFail($id);

		//Generamos actualizacion de info y vista de creación
		return View('casos.actualizaciones.edit-actualizacion', compact('caso'));
	}

	public function postStore(Request $request)
	{
		//dd($request->all());
		$actualizacion = new Actualizacioncaso($request->all());
		$caso = Caso::findorFail($request->input('caso_id'));
		Auth::user()->actualizaciones()->save($actualizacion);
		return redirect(action('CasosController@show', $caso->slug));
	}

	public function getEdit($id)
	{
		$actualizacion = Actualizacioncaso::findOrfail($id);
		$date = date('Y-m-d', strtotime(str_replace('-','/', $actualizacion->date)));
		$caso = Caso::findOrFail($actualizacion->caso_id);

		return View('casos.actualizaciones.edit-actualizacion', compact('caso', 'actualizacion', 'date'));
	}

	public function postUpdate(Request $request, $id)
	{
		$actualizacion = Actualizacioncaso::findOrFail($id);
		$actualizacion->update($request->all());
		$caso = Caso::findOrFail($request->input('caso_id'));
		return redirect(action('CasosController@show', $caso->slug));
	}
}

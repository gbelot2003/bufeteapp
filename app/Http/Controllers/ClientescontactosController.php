<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Contacto;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ClientescontactosController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}
	
	public function getContactos($id)
	{
		$cliente = Cliente::whereId($id)->with('contactos')->get();
		return $cliente;
	}

	public function postContactos(Request $request)
	{
		$contacto = Contacto::create([
			'name' => $request->input('name'),
			'type' => $request->input('type'),
			'cargo' => $request->input('cargo'),
			'notes' => $request->input('notes'),
			'phone' => $request->input('phone'),
			'movil' => $request->input('movil'),
			'email' => $request->input('email'),
		]);

		$contacto->clientes()->attach($request->input('cliente_id'));
		return $contacto;
	}

	public function putContactos(Request $request, $id){

		$contacto = Contacto::findOrFail($id);

		$contacto ->update($request->all());

		$contacto->clientes()->sync([$request->input('cliente_id')]);
	}

	public function getContactoDeattach($contacto_id, $cliente_id){

		$contacto = Contacto::findOrFail($contacto_id);

		$contacto->clientes()->detach($cliente_id);

	}

	public function getContactosdel($contacto_id){

		Contacto::deleted($contacto_id);
		return 'done';
	}
}

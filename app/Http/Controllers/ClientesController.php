<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ClientesController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return View('clientes.index');
    }

     /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
		$clientes = Cliente::create($request->all());
		return 'Archivo creado';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($slug)
    {
        $cliente = Cliente::findBySlug($slug);
		return View('clientes/show', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
		$cliente = Cliente::findOrFail($id);
		$cliente->update($request->all());
		return 'done';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
		Cliente::destroy($id);
		return 'done';
    }
}

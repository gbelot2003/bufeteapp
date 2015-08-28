<?php

namespace App\Http\Controllers;

use App\Actualizacioncaso;
use App\Caso;
use App\Cliente;
use App\Contacto;
use App\Departamento;
use App\Tipocaso;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class CasosController extends Controller
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
        return View('casos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
		$clientes = Cliente::Lists('name', 'id');
		$departamento = Departamento::Lists('departamento', 'id');
		$tipocaso = Tipocaso::Lists('name', 'id');

        return View('casos.create', compact('clientes', 'tipocaso'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
		/**
		 * Se divide en dos el esenario de salvar
		 * $casos y $Actualizacioncasos
		 */
		$caso = new Caso([
			'caso' => $request->input('caso'),
			'cliente_id' => $request->input('cliente_id'),
			'demandado'	=> $request->input('demandado'),
			'demandante'	=> $request->input('demandante'),
			'tipocaso_id'	=>	$request->input('tipocaso_id'),
			'tipojuicio'	=>	$request->input('tipojuicio'),
			'tribunal_id'	=>	$request->input('tribunal_id'),
			'instancia'	=>	$request->input('instancia'),
			'sala_id'	=>	$request->input('sala_id'),
			'juez_id'	=>	$request->input('juez_id'),
			'csj'	=> $request->input('csj'),
			'ca'	=> $request->input('ca'),
			'estado'	=> $request->input('estado'),
		]);

		Auth::user()->casos()->save($caso);

		$actualizacion = new Actualizacioncaso([
			'caso_id' 	=> $caso->id,
			'descripcion'	=>	$request->input('descripcion'),
			'date'	=> $request->input('date')
		]);

		Auth::user()->actualizaciones()->save($actualizacion);
		return 'done';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($slug)
    {
		$caso = Caso::findBySlug($slug);
		return View('casos.show', compact('caso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        return View('casos.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}

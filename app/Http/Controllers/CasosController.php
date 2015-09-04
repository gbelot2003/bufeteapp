<?php

namespace App\Http\Controllers;

use App\Actualizacioncaso;
use App\Caso;
use App\CasosContraparte;
use App\Cliente;
use App\Contacto;
use App\Departamento;
use App\Http\Requests\CasosCreateRequest;
use App\Tipocaso;
use Carbon\Carbon;
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
		$clientes = Cliente::select('name', 'id')->get();
		$departamento = Departamento::Lists('departamento', 'id');
		$tipocaso = Tipocaso::Lists('name', 'id');
        return View('casos.create', compact('clientes', 'tipocaso'));
    }


	/**
	 * Store a newly created resource in storage.
	 *
	 * @param CasosCreateRequest $request
	 * @return Response
	 */
    public function store(CasosCreateRequest $request)
    {

		/** Mover a request */
		/**
		 * Se divide en dos el esenario de salvar
		 * $casos y $Actualizacioncasos
		 */

		$caso = new Caso([
			'caso' => $request->input('caso'),
			'cliente_id' => $request->input('cliente_id'),
			'tipocaso_id'	=>	$request->input('tipocaso_id'),
			'tipojuicio'	=>	$request->input('tipojuicio'),
			'tribunal_id'	=>	$request->input('tribunal_id'),
			'instancia'	=>	$request->input('instancia'),
			'salas'	=>	$request->input('salas_id'),
			'juez_id'	=>	$request->input('juez_id'),
			'honorarios' => $request->input('honorarios'),
			'csj'	=> $request->input('csj'),
			'ca'	=> $request->input('ca'),
			'estado'	=> 1,

		]);

		Auth::user()->casos()->save($caso);

		if($request->input('demandantes') != null){
			$demandantes = $request->input('demandante');
			for ($i = 0; $i < count($demandantes); $i++) {
				$contraparte = new CasosContraparte([
					'caso_id' => $caso->id,
					'contacto_id' => $demandantes[$i],
					'tipo_contraparte' => 1
				]);
				$contraparte->save();
			}
		}

		if($request->input('demandados') != null){
			$demandados = $request->input('demandados');
			for ($i = 0; $i < count($demandados); $i++) {
				$contraparte = new CasosContraparte([
					'caso_id' => $caso->id,
					'contacto_id' => $demandados[$i],
					'tipo_contraparte' => 2
				]);
				$contraparte->save();
			}
		}

		if($request->input('tercerias') != null){
			$tercerias = $request->input('tercerias');
			for ($i = 0; $i < count($tercerias); $i++) {
				$contraparte = new CasosContraparte([
					'caso_id' => $caso->id,
					'contacto_id' => $tercerias[$i],
					'tipo_contraparte' => 3
				]);
				$contraparte->save();
			}
		}

		//$contraparte->save();

		$actualizacion = new Actualizacioncaso([
			'caso_id' 	=> $caso->id,
			'date'	=> date('Y-m-d'),
			'importancia'	=> 1,
			'descripcion'	=>	$request->input('descripcion')
		]);

		Auth::user()->actualizaciones()->save($actualizacion);

	/** mover a request  **/

		return redirect('/casos/');
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

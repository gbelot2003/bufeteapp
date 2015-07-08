<?php

namespace App\Http\Controllers;

use App\Http\Requests\PermissionRequest;
use App\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PermsController extends Controller
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
		return View('permisos.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(PermissionRequest $request)
	{
		$permisos = Permission::create($request->all());
		return 'Archivo creado';
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$permisos = Permission::whereId($id)->select(['id', 'display_name', 'description'])->get();
		return $permisos;
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(PermissionRequest $request, $id)
	{
		$permiso = Permission::findOrFail($id);
		$permiso->update($request->all());
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
		Permission::destroy($id);
		return 'done';
	}
}

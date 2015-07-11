<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RolesController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

    public function index()
	{
		return View('roles.index');
	}

	public function store(Request $request)
	{
		$roles = Role::create($request->all());
		return 'Archivo creado';
	}

	public function edit($id)
	{

	}

	public function update()
	{

	}

	public function destroy($id)
	{
		Role::destroy($id);
		return 'done';
	}
}

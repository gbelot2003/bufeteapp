<?php

namespace App\Http\Controllers;

use App\Permission;
use App\Role;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class RolesController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

    public function index()
	{
		$roles = Role::with('perms');
		$perms = Permission::lists('display_name', 'id');
		return View('roles.index', compact('perms'));
	}

	public function store(Request $request)
	{
		$roles = Role::create($request->all());
		return 'Archivo creado';
	}

	public function edit($id)
	{
		$role = Role::whereId($id)->with('permissions')->get();
		return $role;
	}

	public function update(Request $request, $id)
	{
		$role = Role::findOrFail($id);
		$role->update($request->all());
		if($request->input('perms')){
			$role->perms()->sync($request->input('perms'));
		} else {
			$role->perms()->detach($request->input('perms'));
		}

		return $request->all();
	}

	public function destroy($id)
	{
		Role::destroy($id);
		return 'done';
	}
}

<?php

namespace App\Http\Controllers;

use App\Permission;
use App\Role;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ListadosController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}

    /**
     *
     * @return Response
     */
    public function getPermisos($page = null, $search = null)
    {
		$counter = 10;
		$start = ($page > 1) ? ($page * $counter) - $counter : 0;
		if($search != null){

			$permisos = Permission::latest()->select(['id', 'name', 'display_name', 'description'])
				->where(function ($query) use ($search) {
					$query->where('display_name', 'LIKE', '%'.$search.'%')
						->orWhere('description', 'LIKE', '%'.$search.'%');
				})
				->limit($counter)
				->offset($start)
				->get();

			$total = Permission::where(function ($query) use ($search) {
				$query->where('display_name', 'LIKE', '%'.$search.'%')
					->orWhere('description', 'LIKE', '%'.$search.'%');
			})->count();

			return $permiso = [
				'itemsPerPage' => $counter,
				'total' => $total,
				'items' => $permisos
			];


		} else {

			$permisos = Permission::latest()->select(['id', 'name', 'display_name', 'description'])->limit($counter)->offset($start)->get();
			$total = Permission::all()->count();
			return $permiso = [
				'itemsPerPage' => $counter,
				'total' => $total,
				'items' => $permisos
			];
		}
    }

	public function getPermissionList()
	{
		$permisos = Permission::select('id', 'display_name')->get();
		return $permisos;
	}

	public function getRolesList()
	{
		$roles = Role::select('id', 'display_name')->get();
		return $roles;
	}

	public function getRoles($page = null, $search = null)
	{
		$counter = 10;
		$start = ($page > 1) ? ($page * $counter) - $counter : 0;
		if($search != null){

			$roles = Role::with('perms')
				->latest()->select(['id', 'name', 'display_name', 'description'])
				->where(function ($query) use ($search) {
					$query->where('display_name', 'LIKE', '%'.$search.'%')
						->orWhere('description', 'LIKE', '%'.$search.'%');
				})
				->limit($counter)
				->offset($start)
				->get();

			$total = Role::where(function ($query) use ($search) {
				$query->where('display_name', 'LIKE', '%'.$search.'%')
					->orWhere('description', 'LIKE', '%'.$search.'%');
			})->count();

			return $roles = [
				'itemsPerPage' => $counter,
				'total' => $total,
				'items' => $roles
			];


		} else {

			$roles = Role::with('perms')
				->latest()
				->limit($counter)
				->offset($start)
				->get();
			$total = Role::all()->count();
			return $roles = [
				'itemsPerPage' => $counter,
				'total' => $total,
				'items' => $roles
			];
		}
	}

	public function getUser($page = null, $search = null)
	{
		$counter = 10;
		$start = ($page > 1) ? ($page * $counter) - $counter : 0;
		if($search != null){

			$user = User::with('roles')
				->latest()
				->where(function ($query) use ($search) {
					$query->where('name', 'LIKE', '%'.$search.'%')
						->orWhere('email', 'LIKE', '%'.$search.'%');
				})
				->limit($counter)
				->offset($start)
				->get();

			$total = User::where(function ($query) use ($search) {
				$query->where('name', 'LIKE', '%'.$search.'%')
					->orWhere('email', 'LIKE', '%'.$search.'%');
			})->count();

			return $user = [
				'itemsPerPage' => $counter,
				'total' => $total,
				'items' => $user
			];


		} else {

			$user = User::with('roles')
				->latest()
				->limit($counter)
				->offset($start)
				->get();
			$total = User::all()->count();
			return $roles = [
				'itemsPerPage' => $counter,
				'total' => $total,
				'items' => $user
			];
		}
	}
}

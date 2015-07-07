<?php

namespace App\Http\Controllers;

use App\Permission;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ListadosController extends Controller
{

	public function __construct()
	{
		//$this->middleware('auth');
	}

    /**
     *
     * @return Response
     */
    public function getPermisos()
    {
		$permisos = Permission::latest()->select(['id', 'name', 'description'])->get();
		return $permisos;
    }

	public function getPermisosById($id)
	{
		$permisos = Permission::whereId($id)->select(['id', 'name', 'description'])->get();
		return $permisos;
	}
}

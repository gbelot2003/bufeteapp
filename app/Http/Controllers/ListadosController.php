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
    public function getPermisos($page = null, $search = null)
    {
		$counter = 10;
		$start = ($page > 1) ? ($page * $counter) - $counter : 0;
		if($search != null){

			$permisos = Permission::latest()->select(['id', 'display_name', 'description'])
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

			$permisos = Permission::latest()->select(['id', 'display_name', 'description'])->limit($counter)->offset($start)->get();
			$total = Permission::all()->count();
			return $permiso = [
				'itemsPerPage' => $counter,
				'total' => $total,
				'items' => $permisos
			];
		}
    }

}

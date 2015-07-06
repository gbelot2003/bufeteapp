<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ListadosController extends Controller
{

	public function __construct()
	{
		$this->middleware('guest');
	}

    /**
     *
     * @return Response
     */
    public function getPermisos()
    {

    }
}

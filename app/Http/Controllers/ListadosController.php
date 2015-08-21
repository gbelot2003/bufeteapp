<?php

namespace App\Http\Controllers;

use App\ActualizacionCasos;
use App\Caso;
use App\Cliente;
use App\Contacto;
use App\EventModel;
use App\Permission;
use App\Role;
use App\Tribunale;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ListadosController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * @param null $page
	 * @param null $search
	 * @return array
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

	/**
	 * @return mixed
	 */
	public function getPermissionList()
	{
		$permisos = Permission::select('id', 'display_name')->get();
		return $permisos;
	}

	/**
	 * @return mixed
	 */
	public function getRolesList()
	{
		$roles = Role::select('id', 'display_name')->get();
		return $roles;
	}

	/**
	 * @param null $page
	 * @param null $search
	 * @return array
	 */
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

	/**
	 * @param null $page
	 * @param null $search
	 * @return array
	 */
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

	/**
	 * @param null $page
	 * @param null $search
	 * @return array
	 */
	public function getClientes($page = null, $search = null)
	{
		$counter = 9;
		$start = ($page > 1) ? ($page * $counter) - $counter : 0;
		if($search != null){

			$clientes = Cliente::where(function ($query) use ($search) {
					$query->where('name', 'LIKE', '%'.$search.'%')
						->orWhere('details', 'LIKE', '%'.$search.'%')
						->orWhere('email', 'LIKE', '%'.$search.'%')
						->orWhere('phone', 'LIKE', '%'.$search.'%')
						->orWhere('movil', 'LIKE', '%'.$search.'%');
				})
				->orderBy('id')
				->limit($counter)
				->offset($start)
				->get();

			$total = Cliente::where(function ($query) use ($search) {
				$query->where('name', 'LIKE', '%'.$search.'%')
					->orWhere('details', 'LIKE', '%'.$search.'%');
			})->count();

			return $clientes = [
				'itemsPerPage' => $counter,
				'total' => $total,
				'items' => $clientes
			];


		} else {

			$clientes = Cliente::orderBy('id')
				->limit($counter)
				->offset($start)
				->get();
			$total = Cliente::all()->count();
			return $clientes = [
				'itemsPerPage' => $counter,
				'total' => $total,
				'items' => $clientes
			];
		}
	}

	/**
	 * @param null $page
	 * @param null $search
	 * @return array
	 */
	public function getContactos($page = null, $search = null)
	{
		$counter = 10;
		$start = ($page > 1) ? ($page * $counter) - $counter : 0;
		if($search != null){

			$contactos = Contacto::where(function ($query) use ($search) {
				$query->where('type', 'LIKE', '%'.$search.'%')
				->orWhere('name', 'LIKE', '%'.$search.'%')
				->orWhere('cargo', 'LIKE', '%'.$search.'%')
				->orWhere('phone', 'LIKE', '%'.$search.'%')
				->orWhere('movil', 'LIKE', '%'.$search.'%')
				->orWhere('email', 'LIKE', '%'.$search.'%');
			})
				->orderBy('id')
				->limit($counter)
				->offset($start)
				->get();

			$total = Contacto::where(function ($query) use ($search) {
				$query->where('type', 'LIKE', '%'.$search.'%')
					->orWhere('name', 'LIKE', '%'.$search.'%')
					->orWhere('cargo', 'LIKE', '%'.$search.'%')
					->orWhere('phone', 'LIKE', '%'.$search.'%')
					->orWhere('movil', 'LIKE', '%'.$search.'%')
					->orWhere('email', 'LIKE', '%'.$search.'%');
			})->count();

			return $contactos = [
				'itemsPerPage' => $counter,
				'total' => $total,
				'items' => $contactos
			];


		} else {

			$contactos = Contacto::orderBy('id')
				->limit($counter)
				->offset($start)
				->get();
			$total = Contacto::all()->count();
			return $contactos = [
				'itemsPerPage' => $counter,
				'total' => $total,
				'items' => $contactos
			];
		}
	}

	/**
	 * @param $id
	 * @return mixed
	 */
	public function getClienteName($id){
		$cliente = Cliente::findOrFail($id)->select('name');
		return $cliente;
	}

	/** Queryes de Casos */
	/**	******************/

	public function getCasos($page = null, $search = null)
	{
		$counter = 10;
		$start = ($page > 1) ? ($page * $counter) - $counter : 0;
		if($search != null){

			$casos = Caso::select([
				'casos.caso as caso',
				'clientes.name as clientename',
				'tribunales.name as tribunalname',
				'jueces.name as juezname',
				'tipo_casos.name as tipocaso',
				'casos.tipojuicio as tipojuicio',
				'casos.created_at as created_at',
				'casos.estado as estado'
			])
				->join('users', 'user_id', '=', 'users.id')
				->join('contactos as jueces', 'juez_id', '=', 'jueces.id')
				->join('clientes', 'cliente_id', '=', 'clientes.id')
				->join('tribunales as tribunales', 'tribunal_id', '=', 'tribunales.id')
				->join('tipo_casos as tipo_casos', 'tipocaso_id', '=', 'tipo_casos.id')
				->where(function ($query) use ($search) {
				$query->where('clientes.name', 'LIKE', '%'.$search.'%')
					->orWhere('casos.caso', 'LIKE', '%'.$search.'%')
					->orWhere('tribunales.name', 'LIKE', '%'.$search.'%')
					->orWhere('casos.estado', 'LIKE', '%'.$search.'%')
					->orWhere('jueces.name', 'LIKE', '%'.$search.'%');
				})
				->orderBy('created_at', 'Desc')
				->limit($counter)
				->offset($start)
				->get();

			$total = Caso::select([
				'casos.caso as caso',
				'clientes.name as clientename',
				'tribunales.name as tribunalname',
				'jueces.name as juezname',
				'tipo_casos.name as tipocaso',
				'casos.tipojuicio as tipojuicio',
				'casos.created_at as created_at',
				'casos.estado as estado'
			])
				->join('users', 'user_id', '=', 'users.id')
				->join('contactos as jueces', 'juez_id', '=', 'jueces.id')
				->join('clientes', 'cliente_id', '=', 'clientes.id')
				->join('tribunales as tribunales', 'tribunal_id', '=', 'tribunales.id')
				->join('tipo_casos as tipo_casos', 'tipocaso_id', '=', 'tipo_casos.id')

				->where(function ($query) use ($search) {
					$query->where('clientes.name', 'LIKE', '%'.$search.'%')
						->orWhere('casos.caso', 'LIKE', '%'.$search.'%')
						->orWhere('tribunales.name', 'LIKE', '%'.$search.'%')
						->orWhere('casos.estado', 'LIKE', '%'.$search.'%')
						->orWhere('jueces.name', 'LIKE', '%'.$search.'%');
			})->count();

			return $casos = [
				'itemsPerPage' => $counter,
				'total' => $total,
				'items' => $casos
			];


		} else {

			$casos = Caso::select([
				'casos.caso as caso',
				'clientes.name as clientename',
				'tribunales.name as tribunalname',
				'jueces.name as juezname',
				'tipo_casos.name as tipocaso',
				'casos.tipojuicio as tipojuicio',
				'casos.created_at as created_at',
				'casos.estado as estado',
				'casos.descripcion as descripcion'
				])
				->join('users', 'user_id', '=', 'users.id')
				->join('contactos as jueces', 'juez_id', '=', 'jueces.id')
				->join('clientes', 'cliente_id', '=', 'clientes.id')
				->join('tribunales as tribunales', 'tribunal_id', '=', 'tribunales.id')
				->join('tipo_casos as tipo_casos', 'tipocaso_id', '=', 'tipo_casos.id')
				->orderBy('created_at', 'Desc')
				->limit($counter)
				->offset($start)
				->get();
			$total = Caso::all()->count();
			return $casos = [
				'itemsPerPage' => $counter,
				'total' => $total,
				'items' => $casos
			];
		}
	}

	/**
	 * Conseguir listado de jueces
	 * @return mixed
	 */
	public function getJueces()
	{
		$jueces = Contacto::where('type', '=', 'Juez')->select('id', 'name')->get();
		return $jueces;
	}

	/**
	 * Consigue contactos de caso
	 * @return mixed
	 */
	public function getContactosCaso()
	{
		$contactos = Contacto::where('type', '=', 'Relacionado a Caso')->select('id', 'name')->get();
		return $contactos;
	}

	public function getRelacionados($id)
	{
		$relaciones = ActualizacionCasos::where('caso_id', '=', $id)->with('users')->get();
		return $relaciones;
	}

	/**
	 * Conseguir listado de jueces
	 * @return mixed
	 */
	public function getTribunales()
	{
		$tribunales = Tribunale::select('id', 'name')->get();
		return $tribunales;
	}

	public function getDates()
	{
		$query = $_SERVER['QUERY_STRING'];

		$vars = [];


		foreach (explode('&', $query) as $pair) {
			list($key, $value) = explode('=', $pair);
			if('' == trim($value)){
				continue;
			}

			$vars[$key] = urldecode($value);

		}

		$start = $vars['start'] . ' 00:00:00';
		$end = $vars['end'] . ' 11:59:59';

		$bdate = Carbon::createFromFormat('Y-m-d H:m:s', $start)->startOfDay();
		$sdate = Carbon::createFromFormat('Y-m-d H:m:s', $end)->endOfDay();

		$ds = [$bdate, $sdate];

		$dates = EventModel::whereBetween('start', $ds)->where('user_id', '=', Auth::Id())->get();
		return $dates;

	}
}

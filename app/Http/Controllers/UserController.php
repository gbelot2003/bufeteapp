<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return View('users.index');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
		$request['password'] = bcrypt($request['password']);
		$user = User::create($request->all());
		$user->roles()->attach($request->input('roles')); // id only
		return 'Archivo creado';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
		$user = User::findOrFail($id);

		if($request->input('password')):
			$request['password'] = bcrypt($request->input('password'));
			unset($request['password_confirmation']);
		else:
			unset($request['password']);
			unset($request['password_confirmation']);
		endif;

		$user->update($request->all());

		if($request->input('roles')){
			$user->roles()->sync($request->input('roles'));
		} else {
			$user->roles()->detach($request->input('roles'));
		}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {

    }

	public function setStatus($id)
	{
		$user = User::findOrFail($id);
		if($user->userstatus_id == 1){
			$user->userstatus_id = 2;
		} else{
			$user->userstatus_id = 1;
		}
		$user->update();
		return $user;
	}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class EmailsController extends Controller
{
	public function getEmail()
	{
		Mail::send('email.register', ['name' => 'Gerardo'], function($message)
		{
			$message->to('gbelot2003@hotmail.com', 'Gerardo Belot')->subject('Prueba');
		}
		);
	}
}

<?php

namespace App\Http\Controllers;

use App\Caso;
use App\Cliente;
//use Barryvdh\DomPDF\PDF;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ReportesController extends Controller
{
    public function getInformePrincipal($id)
	{
		$cliente  = Cliente::findOrFail($id);
		$casos = Caso::with('ultimactualizacion')->where('cliente_id', '=', $id)->get();
		//dd($casos);
		//return View('reportes.principal', compact('cliente', 'casos'));
		$data = ['cliente' => $cliente, 'casos', $casos];
		//$pdf = PDF::loadView('reportes.principal', $data);

		$pdf = PDF::loadView('reportes.principal', compact('cliente', 'casos'));
		return $pdf->download($cliente->name . ' - ' . Carbon::now());
	}
}

@extends('reportes')

@section('content')
	<h3>Informe de Casos</h3>
	<div class="row">
		<div class="col m4 s6">
			<table>
				<tr>
					<th>Cliente: </th>
					<td>{{ $cliente->name }}</td>
				</tr>
				<tr>
					<th>Fecha: </th>
					<td>{{ date('d m Y') }}</td>
				</tr>

			</table>
		</div>
	</div>

	<div class="row">
		<div class="col s12">
			<div class="row">
				<div class="col s12 m10">
					<h4>Historial de Casos</h4>
				</div>
			</div>
			@foreach($casos as $casos)
			<div class="row caso">
				<table class="table table-bordered table-hoverable responsive-table" border="1">
					<caption>Caso No # <span class="red-text">{{ $casos->caso }}</span></caption>
					<tr>
						<th>Tribunal</th>
						<th>tipo</th>
						<th>Juez</th>
						<th>Estado</th>
					</tr>
					<tr>
						<td><strong class="blue-text">{{ $casos->tribunales->name  }}</strong></td>
						<td><strong class="blue-text">{{ $casos->tipocasos->name  }}</strong></td>
						<td><strong class="blue-text">{{ $casos->jueces->name  }}</strong></td>
						<td><strong class="blue-text">{{ $casos->estadoTrans($casos->estado)  }}</strong></td>
					</tr>
					<tr>
						<td colspan="4">{!! $casos->ultimactualizacion->descripcion !!}</td>
					</tr>
				</table>
			</div>
			@endforeach

		</div>
	</div>

@stop
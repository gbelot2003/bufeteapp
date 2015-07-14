@extends('app')
@section('title', $cliente->name)

@section('content')
	<div class="row z-depth-1">
		<div class="col s12">
			<h5>Información General</h5>
			<p>{{ $cliente->details }}</p>
				<table class="table table-bordered responsive-table">
					<thead>
						<th>E-mail</th>
						<th>Telefono</th>
						<th>Movil</th>
					</thead>
					<tbody>
						<tr>
							<td>{{ $cliente->email }}</td>
							<td>{{ $cliente->phone }}</td>
							<td>{{ $cliente->movil }}</td>
						</tr>
					</tbody>
				</table>

		</div>
	</div>

	<div class="row">
		<div class="col s12 m9">
			<h5>Historial de Casos</h5>
				<table class="table table-bordered table-hoverable responsive-table">
					<thead>
					<th>Caso No</th>
					<th>Tribunal</th>
					<th>Descripción</th>
					<th>Actualizacion</th>
					</thead>
				</table>
		</div>
		<div class="col s12 m3">
			<h5>Contactos relacionados</h5>
		</div>
	</div>
@stop
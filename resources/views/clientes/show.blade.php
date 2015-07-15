@extends('app')
@section('title', $cliente->name)
@section('v-control', "id='contactos-clientes'")
@section('content')
	<div class="row">

		<div class="col s12 m9">

			<div class="row">
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

				<div class="col s12">
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

			</div>

		</div>

		<div class="col s12 m3 z-depth-1">
			<h5>Contactos relacionados</h5>
			@include('clientes.contactos._contactos')
		</div>

	</div>
@stop


@section('post-script')
	<script src="{{ URL::asset("js/vue-contactos-clientes.js") }}"></script>
@stop

@section('modal')
	@include('clientes.contactos._delete-modal')
@stop
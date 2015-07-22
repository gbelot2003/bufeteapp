@extends('app')
@section('title', 'Administración de casos')
@section('v-control', "id='casos'")

@section('link-button')
	<a id="linking" href="{{ action('CasosController@create') }}" class=" btn-floating btn-large waves-effect waves-light blue"><i class="material-icons">add</i></a>
@stop

@section('content')

	@include('casos._filter')

	<table class="table bordered striped responsive-table">
		<thead>
			<th>No Caso</th>
			<th>Cliente</th>
			<th>Tribunal</th>
			<th>Juez</th>
			<th>Tipo</th>
			<th>Fecha</th>
			<th>Estado</th>
			<th>Acciones</th>
		</thead>
		<tbody>
			<tr v-repeat="row:rows">
				<td><a href="/casos/@{{ row.caso }}">@{{ row.caso }}</a></td>
				<td>@{{ row.clientename }}</td>
				<td>@{{ row.tribunal }}</td>
				<td>@{{ row.juezname }}</td>
				<td>@{{ row.tipojuicio }}</td>
				<td>@{{ row.created_at }}</td>
				<td>@{{ row.estado }}</td>
				<td>delete</td>
			</tr>
		</tbody>
	</table>
	@include('casos._pagination')

@stop

@section('post-script')
	<script src="{{ URL::asset("js/vue-casos.js") }}"></script>
@stop


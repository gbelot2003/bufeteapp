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
			<th>Ultima actualización</th>
			<th>Estado</th>
		</thead>
		<tbody>
			<tr v-repeat="row:rows | filterBy userStatusPreset in 'estado'">
				<td><a href="/casos/@{{ row.caso }}">@{{ row.caso }}</a></td>
				<td>@{{ row.clientename }}</td>
				<td>@{{ row.tribunalname }}</td>
				<td>@{{ row.juezname }}</td>
				<td>@{{ row.tipocaso }} - @{{ row.tipojuicio }}</td>
				<td>@{{ setReadTime(row.update) }}</td>
				<td style="border-right: 1px solid lightslategray">@{{ estadoCaso(row.estado) }}</td>
			</tr>
		</tbody>
	</table>
	@include('casos._pagination')

@stop

@section('post-script')
	<script src="{{ URL::asset("js/vue-casos.js") }}"></script>
@stop


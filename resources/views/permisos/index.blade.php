@extends('app')
@section('title', 'Permisos')
@section('v-control', "id='permisos'")

@section('link-button')
	<a id="create" class="modal-trigger btn-floating btn-large waves-effect waves-light blue" href="#modal1"><i class="material-icons">add</i></a>
@stop

@section('content')

	@include('permisos._messages')

	@include('permisos._filter')

	<table id="permisos-table" class="striped bordered responsive-table">
		<thead>
		<th>No.</th>
		<th>Nombre</th>
		<th>Descripción
		<th>acciones</th>
		</thead>
			<tr v-repeat="row:rows">
				<td>@{{ row.id }}</td>
				<td>@{{ row.display_name }}</td>
				<td>@{{ row.description }}</td>
				<td><a href="#!">&#10007;</a></td>
			</tr>
		<tbody>
	</table>

	@include('permisos._pagination')

	<!--<pre>@{{ $data | json }}</pre>-->
@stop

@section('post-script')
	<script src="{{ URL::asset("js/vue-permisos.js") }}"></script>
@stop

@section('modal')
	@include('permisos._create-modal')
@stop
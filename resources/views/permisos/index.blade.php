@extends('app')
@section('title', 'Administración de permisos')
@section('v-control', "id='permisos'")

@section('link-button')
	<a id="create" class="modal-trigger btn-floating btn-large waves-effect waves-light blue" href="#modal1"><i class="material-icons">add</i></a>
@stop

@section('content')

	@include('permisos._messages')

	@include('permisos._filter')

	<table id="permisos-table" class="striped bordered responsive-table">
		<thead>
		<th>Nombre</th>
		<th>Nombre de sistema</th>
		<th>Descripción
		<th>acciones</th>
		</thead>
			<tr v-repeat="row:rows">
				<td><a href="#!" v-on="click: setPermission(row)">@{{ row.display_name }}</a></td>
				<td>@{{ row.name }}</td>
				<td>@{{ row.description }}</td>
				<td><a href="#!" v-on="click: getDestroy(row)" class="red-text">&#10007;</a></td>
			</tr>
		<tbody>
	</table>

	@include('permisos._pagination')
@stop

@section('post-script')
	<script src="{{ URL::asset("js/vue-permisos.js") }}"></script>
@stop

@section('modal')
	@include('permisos._create-modal')
	@include('permisos._delete-modal')
	@include('permisos._edit-modal')
@stop
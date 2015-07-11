@extends('app')

@section('title', 'Administración de Roles')
@section('v-control', "id='roles'")

@section('link-button')
	<a id="create" class="modal-trigger btn-floating btn-large waves-effect waves-light blue" href="#modal1"><i class="material-icons">add</i></a>
@stop

@section('content')

	@include('roles._messages')

	@include('roles._filter')

	<table id="roles-table" class="striped bordered responsive-table">
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
	@include('roles._pagination')
	<pre>@{{ $data | json }}</pre>

@stop

@section('post-script')
	<script src="{{ URL::asset("js/vue-roles.js") }}"></script>
@stop

@section('modal')
	@include('roles._create-modal')
	@include('roles._delete-modal')
	@include('roles._edit-modal')
@stop
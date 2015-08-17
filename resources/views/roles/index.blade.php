@extends('app')

@section('title', 'Administración de roles')
@section('v-control', "id='roles'")

@section('link-button')
	<a id="create" class="modal-trigger btn-floating btn-large waves-effect waves-light blue" href="#modal1"><i class="material-icons">add</i></a>
@stop

@section('content')

	@include('roles._filter')

	<table id="roles-table" class="striped bordered responsive-table">
		<thead>
		<th>Nombre</th>
		<th>Nombre de sistema</th>
		<th>Descripción</th>
		<th>Permisos</th>
		<th>acciones</th>
		</thead>
		<tr v-repeat="row:rows">
			<td><a href="#!" v-on="click: setRoles(row)">@{{ row.display_name }}</a></td>
			<td>@{{ row.name }}</td>
			<td>@{{ row.description }}</td>
			<td>
				<ul>
					<li v-repeat="perms:rows[$index].perms">@{{ perms.display_name }}</li>
				</ul>
			</td>
			<td><a href="#!" v-on="click: getDestroy(row)" class="red-text"><i class="material-icons">delete</i></a></td>
		</tr>
		<tbody>
	</table>
	@include('roles._pagination')
@stop

@section('addcss')
	<link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
	<style>
		.select2-container, select{
			width: 100% !important;
			height: 200px;
		}
	</style>
@stop

@section('post-script')
	<script src="{{ URL::asset("js/vue-roles.js") }}"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
@stop

@section('modal')
	@include('roles._create-modal')
	@include('roles._delete-modal')
	@include('roles._edit-modal')
@stop
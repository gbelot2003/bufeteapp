@extends('app')
@section('title', 'Usuarios')
@section('v-control', "id='usuarios'")

@section('link-button')
	<a id="create" class="modal-trigger btn-floating btn-large waves-effect waves-light blue" href="#modal1"><i class="material-icons">add</i></a>
@stop

@section('content')
	@include('users._messages')

	@include('users._filter')

	<table id="permisos-table" class="striped bordered responsive-table">
		<thead>
		<th>Nombre</th>
		<th>E-mail</th>
		<th>Roles</th>
		<th>Estado</th>
		<th>acciones</th>
		</thead>
		<tr v-repeat="row:rows | filterBy userStatusPreset in 'userstatus_id'">
			<td><a href="#!" v-on="click: setUsers(row)">@{{ row.name }}</a></td>
			<td>@{{ row.email }}</td>
			<td>
				<ul>
					<li v-repeat="roles:rows[$index].roles">@{{ roles.display_name }}</li>
				</ul>
			</td>
			<td><span>@{{ getUserStatus(row) }}</span></td>
			<td>
				<a href="#!" v-on="click: getDestroy(row)" class="red-text" v-if="row.userstatus_id == 1"> <i class="material-icons">cancel</i></a>
				<a href="#!" v-on="click: getDestroy(row)" class="red-blue" v-if="row.userstatus_id != 1"> <i class="material-icons">replay</i></a>
			</td>
		</tr>
		<tbody>
	</table>
@stop

@section('post-script')
	<script src="{{ URL::asset("js/vue-users.js") }}"></script>
@stop

@section('modal')
	@include('users._create-modal')
	@include('users._delete-modal')
	@include('users._edit-modal')
	@include('users._reactive-modal')
@stop
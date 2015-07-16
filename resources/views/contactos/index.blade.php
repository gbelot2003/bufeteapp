@extends('app')
@section('title', 'Administración de contactos')
@section('v-control', "id='contactos'")

@section('link-button')
	<a id="create" class="modal-trigger btn-floating btn-large waves-effect waves-light blue" href="#modal1"><i class="material-icons">add</i></a>
@stop

@section('content')

	@include('contactos._filter')

	<table class="table bordered striped responsive-table">
		<thead>
			<th>Nombre</th>
			<th>Tipo</th>
			<th>Cargo</th>
			<th>Notas</th>
			<th>Teléfono</th>
			<th>Celular</th>
			<th>E-mail</th>
			<th>Acciones</th>
		</thead>
			<tr class="hoverable" v-repeat="row:rows">
				<td><a href="#!" v-on="click: setEdit(row)">@{{ row.name }}</a></td>
				<td>@{{ row.type }}</td>
				<td>@{{ row.cargo }}</td>
				<td>@{{ row.notes }}</td>
				<td>@{{ row.phone }}</td>
				<td>@{{ row.movil }}</td>
				<td>@{{ row.email }}</td>
				<td><a href="#!" v-on="click: setDestroy(row)" class="red-text"><i class="material-icons">delete</i></a></td>
			</tr>
		<tbody>

		</tbody>
	</table>
	@include('contactos._pagination')

	<pre>@{{ $data | json }}</pre>
@stop
@section('post-script')
	<script src="{{ URL::asset("js/vue-contactos.js") }}"></script>
@stop

@section('modal')
	@include('contactos._delete-modal')
	@include('contactos._edit-modal')
	@include('contactos._create-modal')
@stop
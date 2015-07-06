@extends('app')
@section('title', 'Permisos')
@section('v-control', "id='permisos'")

@section('link-button')
	<a id="create" class="modal-trigger btn-floating btn-large waves-effect waves-light blue" href="#modal1"><i class="material-icons">add</i></a>
@stop

@section('content')
	<table id="permisos-table" class="striped bordered responsive-table">
		<thead>
		<th>No.</th>
		<th>Nombre</th>
		<th>Descripción</th>
		</thead>
		<tbody>
		</tbody>
	</table>
@stop

@section('post-script')
	<script src="{{ URL::asset("js/vue-permisos.js") }}"></script>
@stop
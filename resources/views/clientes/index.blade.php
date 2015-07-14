@extends('app')
@section('title', 'Administración de Clientes')
@section('v-control', "id='clientes'")

@section('link-button')
	<a id="create" class="modal-trigger btn-floating btn-large waves-effect waves-light blue" href="#modal1"><i class="material-icons">add</i></a>
@stop

@section('content')

	@include('clientes._messages')
	@include('clientes._filter')

	<div id="tops" class="row">

		<div class="col s12 m4 p3" v-repeat="row:rows">
			<div class="card blue-grey darken-1">
				<div class="card-content white-text">
					<span class="card-title"><small>@{{ row.name }}</small></span>
					<p>@{{ row.email }}</p>
					<p>@{{ row.phone }}</p>
					<p>@{{ row.movil }}</p>
				</div>
				<div class="card-reveal">
					<span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
					<p>Here is some more information about this product that is only revealed once clicked on.</p>
				</div>
				<div class="card-action">
					<a href="clientes/@{{ row.slug }}">Perfil completo</a>
				</div>
			</div>
		</div>

	</div>

	@include('clientes._pagination')

	<pre>@{{ $data | json }}</pre>
@stop

@section('post-script')
	<script src="{{ URL::asset("js/vue-clientes.js") }}"></script>
	<style>
		@media (max-width: 660px) and (min-width: 854px) {
			.p3{
				min-height: 350px;
			}
		}
	</style>
@stop

@section('modal')
	@include('clientes._create-modal')
@stop
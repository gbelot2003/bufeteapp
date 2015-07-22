@extends('app')
@section('title', 'Creación de casos')
@section('v-control', "id='create-casos'")

@section('content')

	<div class="row">
		<div class="col s12">
			@include('casos.create._form-create')
		</div>
	</div>

	<div class="row">
		<pre>@{{ $data | json }}</pre>
	</div>

@stop
@section('post-script')
	<script src="{{ URL::asset("js/vue-casos-create.js") }}"></script>
@stop


@section('modal')
	@include('casos.create.relacionados._create-contacto-modal')
	@include('casos.create.relacionados._create-juez-modal')
@stop

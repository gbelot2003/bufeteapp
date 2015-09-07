@extends('app')
@section('title', 'Caso - <span class="blue-text text-darken-2">' . $caso->caso . '</span>')
@section('v-control', "id='edit-casos'")

@section('content')

	<div class="row">
		@include('casos.edit._form-edit')
	</div>

@stop
@section('post-script')
	<script src="{{ URL::asset("js/vue-casos-edit.js") }}"></script>
	<script></script>
@stop


@section('modal')
	@include('casos.edit.relacionados._create-contacto-modal')
	@include('casos.edit.relacionados._create-juez-modal')
	@include('casos.edit.relacionados._create-tribunal-modal')
@stop

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
@stop


@section('modal')

@stop

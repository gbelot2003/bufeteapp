@extends('app')
@section('title', 'Casos - ' . $caso->caso)

@section('v-control', "id='show-casos'")

@section('content')

	@include('casos.show._info')
	<div class="row">
		@include('casos.show._actualizaciones')
	</div>

	<div class="row">
		{!! Form::hidden('caso_id', $caso->id, ['id' => 'caso_id', 'v-model' => 'caso_id']) !!}
	</div>

@stop

@section('post-script')
	<script src="{{ URL::asset("js/vue-casos-show.js") }}"></script>
@stop


@section('modal')
	@include('casos.show.actualizaciones._create-modal')
	@include('casos.show.actualizaciones._edit-modal')
	@include('casos.show.actualizaciones._delete-modal')
@stop

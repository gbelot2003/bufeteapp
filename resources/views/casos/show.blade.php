@extends('app')
@section('title', 'Casos - ' . $caso->caso)

@section('v-control', "id='show-casos'")

@section('content')

	<div class="row">
		@include('casos.show._info')
	</div>

	<div class="row">
		@include('casos.show._actualizaciones')
	</div>

	<div class="row">
		{!! Form::hidden('caso_id', $caso->id, ['id' => 'caso_id', 'v-model' => 'caso_id']) !!}
	</div>
	@include('casos.show.actualizaciones._edit-modal')
	@include('casos.show.actualizaciones._delete-modal')
@stop

@section('post-script')
	<script src="{{ URL::asset("js/jquery.cleditor.min.js") }}"></script>
	<script src="{{ URL::asset("js/vue-casos-show.js") }}"></script>
@stop

@extends('app')
@section('title', 'Casos - ' . $caso->caso)

@section('v-control', "id='show-casos'")

@section('content')
	<div class="row">
		@include('casos.show._info')
	</div>

	<div class="row">
		@include(('casos.actualizaciones._actualizacion-form-edit'))
	</div>

@stop

@section('post-script')
	<script>
		$(document).ready(function() {
			$("#descripcion").cleditor();
			$('select').material_select();
			$('.datepicker').pickadate({
				format: 'yyyy-mm-dd'
			});
		});
	</script>
	<script src="{{ URL::asset("js/jquery.cleditor.min.js") }}"></script>
@stop
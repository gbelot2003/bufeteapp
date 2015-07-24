@extends('app')
@section('title', 'Casos - ' . $caso->caso)
@section('link-button')
	<!--<a id="linking" href="{{ action('CasosController@edit', $caso->slug) }}" class=" btn-floating btn-large waves-effect waves-light blue"><i class="material-icons">edit</i></a>-->
@stop
@section('v-control', "id='show-casos'")

@section('content')

	@include('casos.show._info')
	@include('casos.show._actualizaciones')

@stop

@section('post-script')
	<script src="{{ URL::asset("js/vue-casos-show.js") }}"></script>
@stop


@section('modal')

@stop

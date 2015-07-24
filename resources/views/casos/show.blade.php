@extends('app')
@section('title', 'Casos - ' . $caso->caso)
@section('link-button')
	<!--<a id="linking" href="{{ action('CasosController@edit', $caso->slug) }}" class=" btn-floating btn-large waves-effect waves-light blue"><i class="material-icons">edit</i></a>-->
@stop
@section('v-control', "id='show-casos'")

@section('content')

	@include('casos.show._info')

	<div class="row">
		{!! Form::hidden('caso_id', $caso->id, ['id' => 'caso_id', 'v-model' => 'caso_id']) !!}
		<pre>@{{ $data | json }}</pre>
	</div>

	@include('casos.show._actualizaciones')

@stop

@section('post-script')
	<script src="{{ URL::asset("js/vue-casos-show.js") }}"></script>
@stop


@section('modal')

@stop

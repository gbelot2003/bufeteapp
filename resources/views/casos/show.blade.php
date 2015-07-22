@extends('app')
@section('title', 'Casos - ' . $caso->caso)

@section('content')
		<table class="bordered hovered responsive-table">
			<th>Cliente</th>
			<th>Tribunal</th>
			<th>Tipo</th>
			<th>Juzgado</th>
			<th>Juez</th>
		</table>
@stop
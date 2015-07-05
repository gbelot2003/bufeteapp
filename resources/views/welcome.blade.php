@extends('app')

@section('content')
	<div class="title">Laravel 5</div>
	<div ng-controller="indexController">
		<ul>
			<li>@{{ pageClass }}</li>
		</ul>
	</div>

@stop
@extends('app')
@section('title', '')

@section('content')
	{!! $calendar->calendar() !!}
	{!! $calendar->script() !!}
@stop
@extends('calendar')
@section('title', '')
@section('v-control', "id='dashboard'")
@section('link-button')
	<a id="create" class="modal-trigger btn-floating btn-large waves-effect waves-light blue" href="#modal1"><i class="material-icons">add</i></a>
	<!--<a id="hideCalendarForm" class="btn-floating btn-large waves-effect waves-light red" href="#¡"><i class="material-icons">remove</i></a>-->
@stop
@section('content')
	<div class="row">

		<div id="calendarWrapper" class="col s12 m8 diverblock">
			<calendar></calendar>
		</div>

		<div id="formWrapper" class="col s12 m4">

			<div class="col s12">
				<pre>@{{ $data | json }}</pre>
			</div>
		</div>
	</div>
@stop

@section('post-script')
	<script src="{{ URL::asset("js/vue-calendar.js") }}"></script>
@stop

@section('modal')
	@include('dash._create-modal')
	@include('dash._edit-modal')
	@include('dash._show-modal')
	@include('dash._alert1-modal')
@stop
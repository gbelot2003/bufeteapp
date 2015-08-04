<!DOCTYPE html>
<html>
<head>
	<!--Import materialize.css-->
	<link rel="stylesheet" href="{{ URL::asset("css/app.css") }}">

@yield('angular-module')
	<meta id="csrf-token" value="<?php echo csrf_token() ?>" />

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>@yield('page-title', 'Bufete Forlar')</title>
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@yield('addcss')
	<!-- Scripts -->
	<script src="{{ URL::asset("js/calendar.js") }}"></script>
</head>

<body>
	<!-- nav -->
	@include('partials.nav')
	<div class="container" @yield('v-control', "")>
		<div class="row">
			@if($__env->yieldContent('link-button'))
				<div class="col s12 m9">
					<h3 class="page-title hide-on-small-only">@yield('title', '')</h3>
					<h4 class="page-title hide-on-med-and-up">@yield('title', '')</h4>
				</div>

				<div class="col s12 m3">
					<div class="btn-padding">
						@yield('link-button')
					</div>
				</div>
			@else
				<div class="col s12">
					<h3 class="page-title hide-on-small-only">@yield('title', '')</h3>
					<h4 class="page-title hide-on-med-and-up">@yield('title', '')</h4>
				</div>
			@endif
		</div>

		<div class="breadcrumbs">
			<div class="inner">
				<ul class="cf">
					@yield('breadcrumbs')
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col s12">
				@include('partials.flash')
			</div>

			<div class="s12">
				@yield('content')
			</div>
		</div>
		@yield('modal')
	</div>
@yield('post-script')

</body>
</html>

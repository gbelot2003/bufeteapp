<!DOCTYPE html>
<html>
<head>
	<!--Import materialize.css-->
	<link rel="stylesheet" href="{{ URL::asset("css/app.css") }}">
	<script src="{{ URL::asset("js/angular.js") }}"></script>
@yield('angular-module')
	<meta name="csrf-token" content="<?php echo csrf_token() ?>" />

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>@yield('page-title', 'Bufete Forlar')</title>
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body ng-app='angularapp')>
	<!-- nav -->
	@include('partials.nav')
	<div class="container">
		<div class="col s12">
			<h2 class="page-title hide-on-small-only">@yield('title', 'Bufete Forlar')</h2>
			<h4 class="page-title hide-on-med-and-up">@yield('title', 'Bufete Forlar')</h4>
		</div>

		<div class="breadcrumbs">
			<div class="inner">
				<ul class="cf">
					@yield('breadcrumbs')
				</ul>
			</div>
		</div>

		<div class="col s12">
			@include('partials.flash')
		</div>

		<div class="s12">
			@yield('content')
		</div>

	</div>

	@yield('modal')
	<!-- Scripts -->
	<script src="{{ URL::asset("js/app.js") }}"></script>
@yield('post-script')

</body>
</html>

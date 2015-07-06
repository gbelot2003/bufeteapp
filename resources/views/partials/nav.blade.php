<nav class="indigo darken-1">
	<a class="" href="{{ url('/') }}"><img width="252px" src="{{ asset('images/images_theme/logo3.png') }}" alt=""/></a>
	<ul id="slide-out" class="side-nav">

		@if (Auth::guest())
			<li><a href="auth/login"><i class="material-icons right">lock</i>Login</a></li>
		@endif
	</ul>

	<ul class="right hide-on-med-and-down">

		@if (Auth::guest())
			<li><a href="auth/login"><i class="material-icons right">lock</i>Login</a></li>
		@endif
	</ul>
	<a href="#" data-activates="slide-out" class="button-collapse right"><i class="mdi-navigation-menu"></i></a>
</nav>
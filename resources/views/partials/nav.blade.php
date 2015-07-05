<nav class="indigo darken-1">
	<a class="" href="{{ url('/') }}"><img src="{{ asset('images/b_logo.jpg') }}" alt=""/></a>
	<ul id="slide-out" class="side-nav">

		<li><a href="{{ url('/auth/login') }}"><i class="material-icons right">lock</i>Login</a></li>

	</ul>

	<ul class="right hide-on-med-and-down">

		<li><a href="{{ url('/auth/login') }}"><i class="material-icons right">lock</i>Login</a></li>
	</ul>
	<a href="#" data-activates="slide-out" class="button-collapse right"><i class="mdi-navigation-menu"></i></a>
</nav>
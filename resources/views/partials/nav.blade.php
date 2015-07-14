<nav class="indigo darken-1">
	<a class="" href="{{ url('/') }}"><img width="252px" src="{{ asset('images/images_theme/logo3.png') }}" alt=""/></a>
	<ul id="slide-out" class="side-nav">

		@if (Auth::guest())
			<li><a href="auth/login"><i class="material-icons right">lock</i>Login</a></li>
		@else
			<li class="no-padding">
				<ul class="collapsible collapsible-accordion">
					<li>
						<a class="collapsible-header">Registro de Casos<i class="mdi-navigation-arrow-drop-down"></i></a>
						<div class="collapsible-body">
							<ul>
								<li><a href="{{ url('clientes') }}">Clientes</a></li>
							</ul>
						</div>
					</li>
				</ul>
			</li>
			<li class="no-padding">
				<ul class="collapsible collapsible-accordion">
					<li>
						<a class="collapsible-header">Usuarios y permisos <i class="mdi-navigation-arrow-drop-down"></i></a>
						<div class="collapsible-body">
							<ul>
								<li><a href="{{ url('permisos') }}">Permisos</a></li>
								<li><a href="{{ url('roles') }}">Roles</a></li>
								<li><a href="{{ url('usuarios') }}">Usuarios</a></li>
							</ul>
						</div>
					</li>
				</ul>
			</li>

			<li class="no-padding">
				<ul class="collapsible collapsible-accordion">
					<li>
						<a class="collapsible-header">{{ Auth::user()->name }} <span class="caret"></span><i class="mdi-navigation-arrow-drop-down"></i></a>
						<div class="collapsible-body">
							<ul>
								<li><a href="{{ action('UserController@show', Auth::id()) }}">Editar Perfil</a></li>
								<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
							</ul>
						</div>
					</li>
				</ul>
			</li>

		@endif

	</ul>

	<ul class="right hide-on-med-and-down">

		@if (Auth::guest())
			<li><a href="auth/login"><i class="material-icons right">lock</i>Login</a></li>

		@else
			<li><a class="dropdown-button" href="#!" data-activates="dropdown2">Registro de Casos<i class="mdi-navigation-arrow-drop-down right"></i></a></li>
			<ul id='dropdown2' class='dropdown-content'>
				<li><a href="{{ url('clientes') }}">Clientes</a></li>
			</ul>

			<li><a class="dropdown-button" href="#!" data-activates="dropdown4">Usuarios y permisos <i class="mdi-navigation-arrow-drop-down right"></i></a></li>
			<ul id='dropdown4' class='dropdown-content'>
				<li><a href="{{ url('permisos') }}">Permisos</a></li>
				<li><a href="{{ url('roles') }}">Roles</a></li>
				<li><a href="{{ url('usuarios') }}">Usuarios</a></li>
			</ul>

			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }}<span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
					<li><a href="{{ action('UserController@show', Auth::id()) }}">Editar Perfil</a></li>
					<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
				</ul>
			</li>
		@endif

	</ul>
	<a href="#" data-activates="slide-out" class="button-collapse right"><i class="mdi-navigation-menu"></i></a>
</nav>
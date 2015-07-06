@extends('log')
@section('content')
<div class="col s5 m12">
	<div class="row">
		<form class="col s6 m6 offset-m3" method="post" action="{{ url('/auth/login') }}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<p class="flow-text">Login</p>

			<div class="row">
				<div class="col s12">
					<input id="email" name="email" type="email" class="validate" placeholder="E-mail">
				</div>
			</div>
			<div class="row">
				<div class="col s12">
					<input id="password" type="password" name="password" class="validate" placeholder="Contraseña">
				</div>
			</div>

			<P><input type="submit" class="btn white black-text" value="Enviar"/></P>
		</form>
	</div>
</div>
@stop

@extends('log')
@section('content')
<div class="col s5 m12">
	<div class="row">
		<form class="col s6 m6 offset-m3" method="post" action="{{ url('/auth/login') }}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<p class="flow-text">Login</p>

			<div class="row">
				<div class="input-field col s12">
					<i class="material-icons prefix white-text">account_circle</i>
					<input id="email" name="email" type="email" class="validate">
					<label class="white-text" for="email">Correo Electronico</label>
				</div>
			</div>
			<div class="row">
				<div class=" input-field col s12">
					<i class="material-icons prefix white-text">vpn_key</i>
					<input id="password" type="password" name="password" class="validate" minlength="6" length="15">
					<label class="white-text" for="password">Contraseña</label>
				</div>
			</div>
			<div class="row">
				<input type="submit" class="btn white black-text text-center" value="Enviar"/>
			</div>
		</form>
	</div>
</div>
@stop

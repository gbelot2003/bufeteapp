<form method="post" action="/casos/">
	{!! csrf_field() !!}
	<div class="row diverblock grey lighten-4">
		@include('casos.create2._a_clienteCaso')
	</div>

	<div class="row divierblock grey lighten-4">
		@include('casos.create2._b_tipojuicios')
	</div>

	<div class="row grey lighten-4">
		@include('casos.create2._c_involucrados')
	</div>

	<div class="row grey lighten-4">
		@include('casos.create2._d_anotaciones')
	</div>

	<div class="row">
		<div class="col s12">
			<button id="submitCaso" type="submit" class="waves-effect waves-green btn btn-primary">Crear</button>
			<a href="#!" class="waves-effect waves-green btn-flat">Cancelar</a>
		</div>
	</div>
</form>
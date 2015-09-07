<form method="POST" action="/casos/{{ $caso->id }}">
	{!! csrf_field() !!}
	<input name="_method" type="hidden" value="PATCH">
	<div class="row diverblock grey lighten-4">
		@include('casos.edit._a_clienteCaso')
	</div>

	<div class="row divierblock grey lighten-4">
		@include('casos.edit._b_tipojuicios')
	</div>

	<div class="row grey lighten-4">
		@include('casos.edit._c_involucrados')
	</div>

	<div class="row grey lighten-4">
		@include('casos.edit._d_anotaciones')
	</div>

	<div class="row grey lighten-4">
		@include('casos.edit._e_estado')
	</div>

	<hr />

	<div class="row">
		<div class="col s11 m11">
			<button id="submitCaso" type="submit" class="waves-effect waves-green btn btn-primary">Crear</button>
			<a href="/casos/{{ $caso->slug }}" class="waves-effect waves-green btn-flat">Cancelar</a>
		</div>

		<div class="col s1 m1">
			<a href="#!" class="red btn-floating btn-small waves-effect waves-light" title="Eliminar"><i class="material-icons">delete</i></a>
		</div>
	</div>
</form>
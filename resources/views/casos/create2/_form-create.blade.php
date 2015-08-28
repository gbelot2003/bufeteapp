<form action="post" v-on="submit: getSubmitForm">
	<div class="row diverblock grey lighten-4">
		@include('casos.create2._a_clienteCaso')
	</div>

	<div class="row divierblock light-blue lighten-5">
		@include('casos.create2._b_tipojuicios')
	</div>

	<div class="row light-blue lighten-5">
		@include('casos.create2._c_involucrados')
	</div>

	<div class="row light-blue lighten-5">
		@include('casos.create2._d_anotaciones')
	</div>

	<div class="row">
		<div class="col s12">
			<button class="waves-effect waves-green btn btn-primary" v-attr="disabled: ! caso.juez_id">Crear</button>
			<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat" v-on="click: clearForm">Cancelar</a>
		</div>
	</div>
</form>
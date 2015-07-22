<form action="post" v-on="submit: getSubmitForm">
	<div class="row">
		@include('casos.create._clienteCaso')
	</div>

	<div class="row" v-if="caso.cliente_id">
		@include('casos.create._tipojuicios')
	</div>

	<div class="row" v-if="show_details == true">
		@include('casos.create._tipodemandas')
	</div>

	<div class="row">
		@include('casos.create._jueces')
	</div>

	<div class="row">
		@include('casos.create._expedientes')
	</div>

	<div class="row">
		<!-- Descripcion Form Input -->
		<div class="input-field">
			{!! Form::label('descripcion', "Descripción:") !!}
			{!! Form::textarea("descripcion", null, ['class' => 'materialize-textarea', 'v-model' => 'caso.description']) !!}
			{!! Form::hidden('estado', 'Abierto') !!}
		</div>
	</div>
	<div class="row">
		<div class="col s12">
			<button class="waves-effect waves-green btn btn-primary" v-attr="disabled: errors">Crear</button>
			<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat" v-on="click: clearForm">Cancelar</a>
		</div>
	</div>
</form>
<div class="col s12 m6">
	<!-- Caso Form Input -->
	<div class="input-field">
		{!! Form::text("caso", null, ['class' => 'form-control', 'v-model' => 'caso.caso']) !!}
		{!! Form::label('caso', "No. de Expediente") !!}
	</div>
</div>

<div class="col s12 m6">
	<div class="">
		{!! Form::label('cliente_id', "Cliente") !!}
		{!! Form::select('cliente_id', $clientes, null, ['class' => 'select form-control', 'id' => "cliente_id", 'v-clientes' => 'caso.cliente_id', 'v-model' => 'caso.cliente_id', 'v-attr' => 'disabled: ! caso.caso']) !!}
	</div>
</div>
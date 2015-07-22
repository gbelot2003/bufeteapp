<div class="col s12 m6">
	<div class="row">

		<div class="col s12 m6 input-field">
			<select name="tipocaso_id" id="tipocaso_id"  class="browser-default" v-model="caso.tipocaso_id" v-on="click: setCasosConfig">
				<option value="" disabled selected>---Seleccione---</option>
				<option value="1">Demanda</option>
				<option value="2">Defensa</option>
				<option value="3">Procedimiento administrativo</option>
			</select>

		</div>

		<div class="col s12 m6">
			<!-- Tipo de Caso Form Input -->
			<div class="input-field">
				{!! Form::label('tipojuicio', "Tipo de Juicio:") !!}
				{!! Form::text("tipojuicio", null, ['class' => 'form-control', 'v-model' => 'caso.tipojuicio', 'v-attr' => 'disabled: ! caso.tipocaso_id']) !!}
			</div>

		</div>

	</div>
</div>

<div class="col s12 m6">
	<!-- Caso Form Input -->
	<div class="input-field">
		{!! Form::text("tribunal", null, ['class' => 'form-control', 'v-model' => 'caso.tribunal', 'v-attr' => 'disabled: ! caso.tipojuicio']) !!}
		{!! Form::label('tribunal', "tribunal") !!}
	</div>
</div>
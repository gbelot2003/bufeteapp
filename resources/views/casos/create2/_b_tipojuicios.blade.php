<div class="col s12 m5">
	<div class="row">

		<div class="col s12 m6 input-field">
			<select name="tipocaso_id" id="tipocaso_id"  class="browser-default" v-model="caso.tipocaso_id" v-on="click: setCasosConfig" v-attr="disabled: ! caso.cliente_id">
				<option value="" disabled selected>---Contexto---</option>
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

<div class="col s12 m7">
	<div class="row">

		<div class="col s12 m6 input-field">
			<!-- Caso Form Input -->
			{!! Form::label('instancia', "Instancia: ") !!}
			{!! Form::text("instancia", null, ['class' => 'form-control', 'v-model' => 'caso.instancia', 'v-attr' => 'disabled: ! caso.tipojuicio']) !!}
		</div>

		<div class="col s12 m6">
			<div class="row">
				<div class="col s10">
					<div class="">
						{!! Form::label('Tribunal') !!}
						<select name="tribunal_id" id="tribunal_id" class="select form-control" v-tribunales="caso.tribunal_id"  v-model='caso.tribunal_id' v-attr="disabled: ! caso.instancia">
							<option value="" disabled selected>-- Tribunal ---</option>
							<template v-repeat="row: tribunales">
								<my-component msg="@{{ row.name }}" value="@{{ row.id }}"></my-component>
							</template>
						</select>
					</div>
				</div>
				<div class="col s2">

				</div>
			</div>
		</div>

	</div>
</div>

<div class="col s12 m6">
	<div class="row">
		<div class="col s12">
			<div class="">
				{!! Form::label('Salas') !!}
				<select name="salas_id" id="salas_id" class="browser-default"  v-model="caso.salas_id" v-attr="disabled: ! caso.tribunal_id">
					<option value="" disabled selected>-- Sala ---</option>
					<template v-repeat="row: salas">
						<my-component msg="@{{ row.name }}" value="@{{ row.id }}"></my-component>
					</template>
				</select>
			</div>
		</div>
	</div>
</div>

<div class="col s12 m6">
	<div class="row">
		<div class="col s11">
			<div class="">
				{!! Form::label('juez_id', "Juez") !!}
				<select name="juez_id" id="juez_id" class="select form-control" v-jueces="caso.juez_id"  v-model='caso.juez_id' v-attr="disabled: ! caso.salas_id">
					<option value="null" disabled selected>--Seleccione---</option>
					<template v-repeat="row: jueces">
						<my-component msg="@{{ row.name }}" value="@{{ row.id }}"></my-component>
					</template>
				</select>
			</div>
		</div>
		<div class="col s1 m1">
			<a id="create" class="modal-trigger btn-floating btn-small waves-effect waves-light orange left" href="#modal1"><i class="material-icons">add</i></a>
		</div>
	</div>
</div>

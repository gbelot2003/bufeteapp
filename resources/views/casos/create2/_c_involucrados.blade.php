<div class="row" v-if="caso.tipocaso_id == 2">

	<div class="col s12 m6">
		<!-- Demandado Form Input -->
		<div class="field">
			{!! Form::label('demandado', "Demandado") !!}
			{!! Form::text("demandado", null, ['class' => 'm11 s11 form-control', 'v-model' => 'caso.demandado', 'v-attr' => "disabled: demandado"]) !!}
		</div>

	</div>

	<div class="col s11 m5">
		<!-- Demandante Form Input -->
		<div class="field">
			{!! Form::label('demandante', "Demandante") !!}
			<select name="demandante[]" id="demandante" class="select form-control" v-demandante="caso.demandante"  v-model='caso.demandante' multiple>

				<template v-repeat="row: contactos">
					<my-component msg="@{{ row.name }}" value="@{{ row.name }}"></my-component>
				</template>
			</select>
		</div>

	</div>
	<div class="col s1 m1">
		<a id="createContacts" class="modal-trigger btn-floating btn-small waves-effect waves-light green" href="#modal2" v-on="click: getNewContacto"><i class="material-icons">add</i></a>
	</div>

</div>

<div class="row" v-if="caso.tipocaso_id == 1">

	<div class="col s11 m5">
		<!-- Demandado Form Input -->
		<div class="field">
			{!! Form::label('demandado', "Demandado") !!}
			<select name="demandado[]" id="demandado" class="select form-control" v-demandado="caso.demandado"  v-model='caso.demandado'>
				<template v-repeat="row: contactos">
					<my-component msg="@{{ row.name }}" value="@{{ row.name }}"></my-component>
				</template>
			</select>
		</div>

	</div>
	<div class="col s1 m1">
		<a id="createContacts" class="modal-trigger btn-floating btn-small waves-effect waves-light green" href="#modal2" v-on="click: getNewContacto"><i class="material-icons">add</i></a>
	</div>

	<div class="col s12 m6">
		<!-- Demandante Form Input -->
		<div class="field m11">
			{!! Form::label('demandante', "Demandante") !!}
			{!! Form::text("demandante", null, ['class' => 'm11 s11 form-control', 'v-model' => 'caso.demandante',  'v-attr' => "disabled: demandante"]) !!}
		</div>
	</div>
</div>
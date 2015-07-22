<div class="row">
	<div class="col s11 m5">
		<div class="">
			{!! Form::label('juez_id', "Juez") !!}
			<select name="juez_id" id="juez_id" class="select form-control" v-jueces="caso.juez_id"  v-model='caso.juez_id'>
				<option value="null" disabled selected>--Seleccione---</option>
				<template v-repeat="row: jueces">
					<my-component msg="@{{ row.name }}" value="@{{ row.id }}"></my-component>
				</template>
			</select>
		</div>
	</div>
	<div class="col s1 m1">
		<a id="create" class="modal-trigger btn-floating btn-small waves-effect waves-light orange" href="#modal1"><i class="material-icons">add</i></a>
	</div>
</div>


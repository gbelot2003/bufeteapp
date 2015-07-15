	<div class="row" v-if="! showEdit">
		@include('clientes.contactos._filter')
	</div>

	<div class="row" v-show="! showForm, ! showEdit" v-transition="expand">
		@include('clientes.contactos._lists')
	</div>

	<div class="row">
		<div class="col s12"  v-show="showForm" v-transition="expand">
			@include('clientes.contactos._form')
		</div>
	</div>

	<div class="row">
		<div class="col s12" v-show="showEdit" v-transition="expand">
			@include('clientes.contactos._form-edit')
		</div>
	</div>
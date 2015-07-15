<fieldset class="col s12">
	<form method="post" v-on="submit: onSubmitFormEdit">

		<div class="col s12">
			<div class="">
				<label for="name">Nombre</label>
				<input type="text" id="name" v-model="contactos.name"/>
				<input type="hidden" value="@{{ cid }}" v-model="contactos.cliente_id"/>
			</div>
		</div>

		<div class="col s12">
			<div class="">
				<label for="cargo">Cargo</label>
				<input type="text" id="cargo" v-model="contactos.cargo"/>
			</div>
		</div>

		<div class="col s12">
			<div class="">
				<label for="notes">Notas</label>
				<textarea id="notes" rows="6" class="materialize-textarea" v-model="contactos.notes"></textarea>
			</div>
		</div>

		<div class="col s12">
			<div class="">
				<label for="phone">E-mail</label>
				<input type="text" id="email" v-model="contactos.email"/>
			</div>
		</div>

		<div class="col s12">
			<div class="">
				<label for="phone">Teléfono</label>
				<input type="text" id="phone" v-model="contactos.phone"/>
			</div>
		</div>

		<div class="col s12">
			<div class="">
				<label for="movil">Celular</label>
				<input type="text" id="movil" v-model="contactos.movil"/>
			</div>
		</div>

		<div class="col s12">
			<button class="waves-effect waves-green btn btn-primary" v-attr="disabled: errors">Salvar</button>
			<a href="#!" class="waves-effect waves-green btn-flat" v-on="click: closeForm">Cancelar</a>
		</div>

		<div class="col s12">
			<br/>
			<a href="#!" class="waves-effect waves-green btn-flat red white-text" v-on="click:OnModalDelete(contactos)">Eliminar</a>
		</div>
	</form>
	<hr style="visibility: hidden"/>
</fieldset>
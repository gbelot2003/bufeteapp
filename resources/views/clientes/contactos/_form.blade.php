<fieldset class="col s12">
	<form method="post" v-on="submit: onSubmitForm">

		<div class="col s12">
			<div class="input-field">
				<input type="text" id="name" v-model="contactos.name"/>
				<label for="name">Nombre</label>
				<input type="hidden" value="@{{ cid }}" v-model="contactos.cliente_id"/>
			</div>
		</div>

		<div class="col s12">
			<div class="input-field">
				<input type="text" id="cargo" v-model="contactos.cargo"/>
				<label for="cargo">Cargo</label>
			</div>
		</div>

		<div class="col s12">
			<div class="input-field">
				<textarea id="notes" rows="6" class="materialize-textarea" v-model="contactos.notes"></textarea>
				<label for="notes">Notas</label>
			</div>
		</div>

		<div class="col s12">
			<div class="input-field">
				<input type="text" id="email" v-model="contactos.email"/>
				<label for="phone">E-mail</label>
			</div>
		</div>

		<div class="col s12">
			<div class="input-field">
				<input type="text" id="phone" v-model="contactos.phone"/>
				<label for="phone">Teléfono</label>
			</div>
		</div>

		<div class="col s12">
			<div class="input-field">
				<input type="text" id="movil" v-model="contactos.movil"/>
				<label for="movil">Celular</label>
			</div>
		</div>

		<div class="col s12">
			<button class="waves-effect waves-green btn btn-primary" v-attr="disabled: errors">Crear</button>
			<a href="#!" class="waves-effect waves-green btn-flat" v-on="click: closeForm">Cancelar</a>
		</div>
	</form>
	<hr style="visibility: hidden"/>
</fieldset>
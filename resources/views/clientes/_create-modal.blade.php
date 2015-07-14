<div id="modal1" class="modal">
	<form method="post" v-on="submit: onSubmitForm">
		<div class="modal-content">
			<h4>Nuevo Permiso</h4>

			<div class="row">

				<div class="col s12 m6">
					<div class="input-field">
						<input id="name" name="name" type="text" length="55" v-model='cliente.name'>
						<label for="name">
							Nombre
							<span class="error red-text" v-if=" ! cliente.name">*</span>
						</label>
					</div>
				</div>

				<div class="col s12 m6">
					<div class="input-field">
						<input type="email" id="email" name="email" length="255" v-model="cliente.email">
						<label for="email">
							E-mail
							<span class="error red-text" v-if=" ! cliente.email">*</span>
						</label>
					</div>
				</div>

			</div>

			<div class="row">
				<div class="col s12 m6">
					<div class="input-field">
						<input id="phone" name="phone" type="text" length="55" v-model='cliente.phone'>
						<label for="phone">
							Teléfono
						</label>
					</div>
				</div>

				<div class="col s12 m6">
					<div class="input-field">
						<input type="text" id="movil" name="movil" length="10" v-model="cliente.movil">
						<label for="movil">
							Teléfono Celular
						</label>
					</div>
				</div>

			</div>

			<div class="row">

			</div>

		</div>
		<div class="modal-footer">
			<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat" v-on="click: clearForm">Cancelar</a>
			<button class="waves-effect waves-green btn btn-primary" v-attr="disabled: errors">Crear</button>
		</div>
	</form>
</div>
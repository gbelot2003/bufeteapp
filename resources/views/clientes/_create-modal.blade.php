<div id="modal1" class="modal">
	<form method="post" v-on="submit: onSubmitForm">
		<div class="modal-content">
			<h4>Nuevo Permiso</h4>

			<div class="row">

				<div class="col s12 m6">
					<div class="input-field">
						<input id="name" name="name" type="text" length="55" v-model='newCliente.name'>
						<label for="name">
							Nombre
							<span class="error red-text" v-if=" ! newCliente.name">*</span>
						</label>
					</div>
				</div>

				<div class="col s12 m6">
					<div class="input-field">
						<input type="email" id="email" name="email" length="80" v-model="newCliente.email">
						<label for="email">
							E-mail
						</label>
					</div>
				</div>

			</div>

			<div class="row">
				<div class="col s12 m6">
					<div class="input-field">
						<input id="phone" name="phone" type="text" length="14" maxlength="14" v-model='newCliente.phone'>
						<label for="phone">
							Teléfono
						</label>
					</div>
				</div>

				<div class="col s12 m6">
					<div class="input-field">
						<input type="text" id="movil" name="movil" length="14" maxlength="14" v-model="newCliente.movil">
						<label for="movil">
							Teléfono Celular
						</label>
					</div>
				</div>

			</div>

			<div class="row">
				<div class="input-field">
					<textarea name="details" id="details" cols="30" rows="4" class="materialize-textarea" v-model="newCliente.details"></textarea>
					<label for="textarea1">Descripción o detalles</label>
				</div>    
			</div>

		</div>
		<div class="modal-footer">
			<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat" v-on="click: clearForm">Cancelar</a>
			<button class="waves-effect waves-green btn btn-primary" v-attr="disabled: errors">Crear</button>
		</div>
	</form>
</div>
<div id="modal1" class="modal bottom-sheet">
	<form method="post" v-on="submit: onSubmitForm">
		<div class="modal-content">
			<h4>Nuevo Permiso</h4>


			<div class="row">
				<div class="col s12">
					<div class="input-field">
						<input id="name" name="display_name" type="text" length="55" v-model='newPerm.display_name'>
						<label for="name">
							Nombre
							<span class="error red-text" v-if=" ! newPerm.display_name">*</span>
						</label>
					</div>
				</div>

				<div class="col s12">
					<div class="input-field">
						<input type="text" id="description" name="description" length="255" v-model="newPerm.description">
						<label for="description">
							Descripción
							<span class="error red-text" v-if=" ! newPerm.description">*</span>
						</label>
					</div>
				</div>

			</div>
		</div>
		<div class="modal-footer">
			<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat" v-on="click: clearForm">Cancelar</a>
			<button class="waves-effect waves-green btn btn-primary" v-attr="disabled: errors">Crear</button>
		</div>
	</form>
</div>
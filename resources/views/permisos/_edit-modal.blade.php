<div id="modal3" class="modal bottom-sheet">
	<form method="PUT" v-on="submit: OnSubmitEditForm">
		<div class="modal-content">
			<h4>Editar Permiso</h4>


			<div class="row">
				<div class="col s12">
					<div class="">
						<label for="name">
							Nombre
						</label>
						<input id="name" name="display_name" type="text" length="55" v-model='permission.display_name'>
					</div>
				</div>

				<div class="col s12">
					<div class="">
						<label for="description">
							Descripción
						</label>
						<input type="text" id="description" name="description" length="255" v-model="permission.description">
					</div>
				</div>

			</div>
		</div>
		<div class="modal-footer">
			<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat" v-on="click: getCloseEdit">Cancelar</a>
			<button class="waves-effect waves-green btn btn-primary" v-attr="disabled: editError">Guardar cambios</button>
		</div>
	</form>
</div>
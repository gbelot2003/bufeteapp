<div id="modal3" class="modal bottom-sheet">
	<form method="PUT" v-on="submit: OnSubmitEditForm">
		<div class="modal-content">
			<h4>Editar Role</h4>


			<div class="row">
				<div class="col s12">
					<div class="">
						<label for="name">
							Nombre
						</label>
						<input id="name" name="display_name" type="text" length="55" v-model='Roles.display_name'>
					</div>
				</div>

				<div class="col s12">
					<div class="">
						<label for="description">
							Descripción
						</label>
						<input type="text" id="description" name="description" length="255" v-model="Roles.description">
					</div>
				</div>

				<div id="perms" class="col s12">
					<select class="select browser-default" id="pems-select" v-perms="Roles.perms_lists" name="perms" multiple="multiple" v-model="Roles.perms">
						<option v-repeat="perm:permissions" value="@{{ perm.id }}" name="id" v-attr="selected: submitedSelect(perm.id)">@{{ perm.display_name }}</option>
					</select>
				</div>

			</div>
		</div>
		<div class="modal-footer">
			<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat" v-on="click: getCloseEdit">Cancelar</a>
			<button class="waves-effect waves-green btn btn-primary" v-attr="disabled: editError">Guardar cambios</button>
		</div>
	</form>
</div>
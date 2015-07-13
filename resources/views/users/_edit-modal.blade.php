<div id="modal3" class="modal bottom-sheet">
	<form method="PUT" v-on="submit: OnSubmitEditForm">
		<div class="modal-content">
			<h4>Editar Usuario</h4>


			<div class="row">
				<div class="col s12">
					<div class="">
						<label for="name">
							Nombre
						</label>
						<input id="name" name="display_name" type="text" length="55" v-model='usuario.name'>
					</div>
				</div>

				<div class="col s12">
					<div class="">
						<label for="email">
							E-mail
						</label>
						<input type="email" id="email" name="email" class="validate" length="255" v-model="usuario.email">
					</div>
				</div>
			</div>

			<div class="row">

				<div class="col s12 m6">
					<div class="input-field">

						<input name="password" id="password" type="password" v-model="usuario.password"/>

						<label for="password">
							Contraseña
							<span class="error red-text" v-if=" ! newUser.password">*</span>
						</label>
					</div>
				</div>

				<div class="col s12 m6">
					<div class="input-field">

						<input name="password_confirmation" type="password"  v-model="usuario.password_confirmation"/>

						<label for="password_confirmation">
							Contraseña
							<span class="error red-text" v-if=" ! newUser.password_confirmation">*</span>
							<span class="error red-text" v-if="newUser.password != newUser.password_confirmation ">Las contraseñas no son iguales</span>
						</label>
					</div>
				</div>

			</div>

			<div id="perms" class="col s12">
				<select class="select browser-default" id="pems-select" v-perms="Roles.perms_lists" name="perms" multiple="multiple" v-model="usuario.roles">
					<option v-repeat="roles:roles" value="@{{ roles.id }}" name="id" v-attr="selected: submitedSelect(perm.id)">@{{ roles.display_name }}</option>
				</select>
			</div>

		</div>
		<div class="modal-footer">
			<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat" v-on="click: getCloseEdit">Cancelar</a>
			<button class="waves-effect waves-green btn btn-primary" v-attr="disabled: editError">Guardar cambios</button>
		</div>
	</form>
</div>
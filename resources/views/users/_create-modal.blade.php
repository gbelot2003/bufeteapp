<div id="modal1" class="modal bottom-sheet">
	<form method="post" v-on="submit: onSubmitForm">
		<div class="modal-content">
			<h4>Nuevo Usuario</h4>


			<div class="row">
				<div class="col s12 m6">
					<div class="input-field">
						<input id="name" name="name" type="text" length="55" v-model='newUser.name'>
						<label for="name">
							Nombre
							<span class="error red-text" v-if=" ! newUser.name">*</span>
						</label>
					</div>
				</div>

				<div class="col s12 m6">
					<div class="input-field">
						<input type="email" class="validate" id="email" name="description" length="255" v-model="newUser.email">
						<label for="description">
							E-Mail
							<span class="error red-text" v-if=" ! newUser.email">*</span>
						</label>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col s12 m6">
					<div class="input-field">

						<input name="password" id="password" type="password" v-model="newUser.password"/>

						<label for="password">
							Contraseña
							<span class="error red-text" v-if=" ! newUser.password">*</span>
						</label>
					</div>
				</div>
				<div class="col s12 m6">
					<div class="input-field">

						<input name="password_confirmation" type="password"  v-model="newUser.password_confirmation"/>

						<label for="password_confirmation">
							Contraseña
							<span class="error red-text" v-if=" ! newUser.password_confirmation">*</span>
							<span class="error red-text" v-if="newUser.password != newUser.password_confirmation ">Las contraseñas no son iguales</span>
						</label>
					</div>
				</div>
			</div>

			<div id="perms" class="col s12">
				<select class="select browser-default" id="pems-select" v-perms="Roles.perms_lists" name="perms" multiple="multiple" v-model="newUser.roles">
					<option v-repeat="roles:roles" value="@{{ roles.id }}" name="id">@{{ roles.display_name }}</option>
				</select>
			</div>

		</div>
		<div class="modal-footer">
			<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat" v-on="click: clearForm">Cancelar</a>
			<button class="waves-effect waves-green btn btn-primary" v-attr="disabled: errors">Crear</button>
		</div>
	</form>
</div>
<div id="modal1" class="modal">
	<form method="PUT" v-on="submit: submitCreate">
		<div class="modal-content">
			<h4>Edición de contacto</h4>


			<div class="row">

				<div class="col s12 m6">
					<div class="">
						<label for="name">
							Nombre
						</label>
						<input id="name" name="name" type="text" length="55" v-model='newContacto.name'>
					</div>
				</div>

				<div class="col s12 m6">
					<div class="cargo">
						<label for="cargo">
							Cargo
						</label>
						<input type="text" id="cargo" name="cargo" length="255" v-model="newContacto.cargo">
					</div>
				</div>

			</div>

			<div class="row">

				<div class="col s12 m6">
					<div class="phone">
						<label for="phone">
							Teléfono
						</label>
						<input type="text" id="cargo" name="phone" length="15" v-model="newContacto.phone">
					</div>
				</div>

				<div class="col s12 m6">
					<div class="movil">
						<label for="movil">
							Celular
						</label>
						<input type="text" id="movil" name="movil" length="15" v-model="newContacto.movil">
					</div>
				</div>

			</div>

			<div class="row">
				<div class="col s12 m6">
					<div class="email">
						<label for="email">
							E-mail
						</label>
						<input type="text" id="email" name="email" length="15" v-model="newContacto.email">
					</div>
				</div>

				<div class="input-field col s12 m6">
					<select class="browser-default" v-model="newContacto.type">
						<option value="Juez">Juez</option>
						<option value="Relacionado a Caso">Relacionado a Caso</option>
						<option value="Otros">Otros</option>
					</select>
				</div>

			</div>

			<div class="row">
				<div class="input-field col s12">
					<textarea id="notes" class="materialize-textarea" v-model="contactos.notes"></textarea>
					<label for="notes">Notas</label>
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat" v-on="click: modalDestroy">Cancelar</a>
			<button class="waves-effect waves-green btn btn-primary" v-attr="disabled: editError">Guardar cambios</button>
		</div>
	</form>
</div>
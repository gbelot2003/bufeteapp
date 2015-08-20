<div id="modal1" class="modal">
	<form method="PUT" v-on="submit: submitJuezCreate">
		<div class="modal-content">
			<h4>Crear nuevo juez</h4>


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
					<input type="hidden" value="Juez" v-model="newContacto.type"/>
				</div>

			</div>

			<div class="row">
				<div class="input-field col s12">
					<textarea id="notes" class="materialize-textarea" v-model="newContacto.notes"></textarea>
					<label for="notes">Notas</label>
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat" v-on="click: modalJuezDestroy">Cancelar</a>
			<button class="waves-effect waves-green btn btn-primary" v-attr="disabled: JuezeditError">Crear</button>
		</div>
	</form>
</div>
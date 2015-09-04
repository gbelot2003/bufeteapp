<div id="modal1" class="modal">
	<form method="post" action="{{ action('ActualizacioncasosController@store') }}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" value="{{ $caso->id }}"/>
		<div class="modal-content">
			<h4>Nueva Actualización</h4>

			<div class="row">

				<div class="col s12 m8">
					<div class="">
						<input type="date" class="datepicker" v-model="newDatos.date">
						<label for="date">
							Fecha
						</label>
					</div>
				</div>

				<div class="col s12 m4">
					<select name="importancia" id="" v-model="newDatos.importancia">
						<option value="1">Importante</option>
						<option value="2">No actualiza perfil</option>
					</select>
					<label for="importancia">
						Importancia
					</label>
				</div>

			</div>

			<div class="row">
				<div>
					<textarea name="descripcion" id="descripcion" class="textarea" v-model="newDatos.descripcion"></textarea>
				</div>
			</div>

		</div>
		<div class="modal-footer">
			<a href="#!" class="waves-effect waves-green btn-flat" v-on="click: getCloseCreate">Cancelar</a>
			<button class="waves-effect waves-green btn btn-primary" v-attr="disabled: editError">Crear</button>
		</div>
	</form>
</div>
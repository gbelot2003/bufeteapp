<div id="modal3" class="modal">
	<form method="PUT" v-on="submit: submitTribunalCreate">
		<div class="modal-content">
			<h4>Agregar Tribunal</h4>

			<div class="row">

				<div class="col s12">
					<div class="">
						<label for="name">
							Nombre
						</label>
						<input id="name" name="name" type="text" length="75" v-model='newTribunal.name'>
					</div>
				</div>

			</div>

		</div>

		<div class="modal-footer">
			<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat" v-on="click: modalTribunalDestroy">Cancelar</a>
			<button class="waves-effect waves-green btn btn-primary" v-attr="disabled: ! newTribunal.name">Crear</button>
		</div>
	</form>
</div>
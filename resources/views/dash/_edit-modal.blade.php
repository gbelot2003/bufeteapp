<div id="modal3" class="modal">

	<form method="post">

		<div class="modal-content">

			<h4>Editar evento</h4>

			<div class="col s12 amber lighten-5 diverblock">
				<span><strong>Inicio</strong></span>

				<div class="row">

					<div class="s12 col">

						<div class="input-field">
							<input type="text" name="title" id="inputTitleEdit" v-model="editEvent.title"/>
							<label for="title">Titulo</label>
						</div>

					</div>

				</div>

			</div>


			<div class="col s12 amber lighten-5 diverblock">
				<div class="input-field">
					<textarea name="details"  class="materialize-textarea" cols="30" rows="10" v-model="editEvent.details"></textarea>
					<label for="textarea1">Detalles</label>
				</div>
			</div>

			<div class="col s12">
				<div class="modal-footer">
					<button class="btn waves-effect waves-light blue" type="submit" name="action" id="myBoton" v-on="click: submitEditEvent">Editar
						<i class="material-icons">edit</i>
					</button>
					<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
				</div>
			</div>

		</div>

	</form>
</div>
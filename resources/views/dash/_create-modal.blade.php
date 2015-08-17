<div id="modal1" class="modal">

	<form method="post" v-on="submit: submitEvent">

		<div class="modal-content">

			<h4>Crear evento</h4>

			<div class="col s12 amber lighten-5 diverblock">
				<span><strong>Inicio</strong></span>

				<div class="row">

					<div class="s12 m4 col">

						<div class="input-field">
							<input type="text" name="title" id="inputTitle" v-model="title"/>
							<label for="title">Titulo</label>
						</div>

					</div>

					<div class="s12 m4 col">
						<p>De: </p>
						<input class="datetimepiker" id="start" v-start>
					</div>

					<div class="s12 m4 col">
						<p>Hasta: </p>
						<input class="datetimepiker" id="end" v-end>
					</div>

				</div>

			</div>


			<div class="col s12 amber lighten-5 diverblock">
				<div class="input-field">
					<textarea name="details"  class="materialize-textarea" cols="30" rows="10" v-model="details"></textarea>
					<label for="textarea1">Detalles</label>
				</div>
			</div>

			<div class="col s12">
				<div class="modal-footer">
					<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
					<button class="btn waves-effect waves-light" type="submit" name="action" id="myBoton">Crear
						<i class="material-icons">send</i>
					</button>
				</div>
			</div>

		</div>

	</form>
</div>
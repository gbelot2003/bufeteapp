<div id="modal3" class="modal">

	<form method="post" v-on="submit: submitEvent">

		<div class="modal-content">

			<h4>Editar evento calendario</h4>

			<div class="col s12 amber lighten-5 diverblock">
				<span><strong>Inicio</strong></span>

				<div class="row">

					<div class="s12 col">

						<div class="input-fiel">
							<label for="title">Titulo</label>
							<input type="text" name="title" id="inputTitle" v-model="editEvent.title"/>

						</div>

					</div>

					<div class="s12 m6 col">
						<input type="date" name="start_day" id="inputStartDay" v-model="editEvent.start_date"/>
					</div>

					<div class="s12 m6 col">
						<input type="time" name="start_hour"  id="inputStartHour" v-model="editEvent.start_hour"/>
					</div>

					<div class="s12 col">
						<label>¿Todo el día?</label>

						<div class="switch">
							<label>
								No
								<input type="checkbox" class="blue" id="inputCheckBox" v-model="allDay">
								<span class="lever"></span>
								Si
							</label>
						</div>

					</div>

				</div>

			</div>

			<div class="col s12 amber lighten-5 diverblock">

				<span><strong>Fin</strong></span>

				<div class="row">

					<div class="s12 m6 col">
						<div class="input-field">
							<input type="date" name="end_day"  id="inputEndDay" v-model="editEvent.end_date"/>
						</div>
					</div>

					<div class="s12 m6 col">
						<div class="input-field">
							<input type="time" name="end_hour"  id="inputEndHour" v-model="editEvent.end_hour"/>
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
					<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
					<button class="btn waves-effect waves-light" type="submit" name="action" id="myBoton">Crear
						<i class="material-icons">send</i>
					</button>
				</div>
			</div>

		</div>

	</form>
</div>
<div id="modal1" class="modal">

	<form method="post" v-on="submit: submitEvent">

		<div class="modal-content">

			<h4>Nuevo Evento de calendario</h4>

			<div class="col s12 amber lighten-5 diverblock">
				<span><strong>Inicio</strong></span>

				<div class="row">

					<div class="s12 col">

						<div class="input-field">
							<input type="text" name="title" id="inputTitle" v-model="title"/>
							<label for="title">Titulo</label>
						</div>

					</div>

					<div class="s12 m4 col">
						<input type="date" name="start_day" class="datepicker" value="<?php echo date('Y-m-d'); ?>" id="inputStartDay" v-model="start_date"/>
					</div>

					<div class="s12 m4 col">
						<input type="time" name="start_hour" value="<?php echo date('H:i'); ?>" id="inputStartHour" v-model="start_hour"/>
					</div>

					<div class="s12 m4 col">
						<label>¿Todo el día?</label>
						<div class="switch">
							<label>
								Off
								<input type="checkbox" v-model="allday">
								<span class="lever"></span>
								On
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
							<input type="date" name="end_day" class="datepicker" value="<?php echo \Carbon\Carbon::now()->format('Y-m-d'); ?>" id="inputEndDay" v-model="end_date"/>
						</div>
					</div>

					<div class="s12 m6 col">
						<div class="input-field">
							<input type="time" name="end_hour" value="<?php echo \Carbon\Carbon::now()->addHours(2)->format('H:i'); ?>" id="inputEndHour" v-model="end_hour"/>
						</div>
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
					<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat" v-on="click: clearForm">Cancelar</a>
					<button class="btn waves-effect waves-light" type="submit" name="action" id="myBoton">Crear
						<i class="material-icons">send</i>
					</button>
				</div>
			</div>

		</div>

	</form>
</div>
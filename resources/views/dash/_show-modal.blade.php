<div id="modal2" class="modal">

		<div class="modal-content">

			<h5>@{{ editEvent.title }}</h5>

			<div class="col s12 diverblock text-info">

				<div class="row">

					<div class="col m3">
						<div class="row">
							<div class="s12 col amber lighten-5 diverblock">
								<p><strong>Inicio</strong></p>
								<span>@{{ editEvent.start_date }}</span> - <span>@{{ editEvent.start_hour }}</span>
							</div>

							<div class="s12 col amber lighten-5 diverblock">
								<p><strong>hasta</strong></p>
								<span>@{{ editEvent.end_date }}</span> - <span>@{{ editEvent.end_hour }}</span>
							</div>
						</div>
					</div>

					<div class="col m9 diverblock">
						<div class="s12 col amber lighten-5 ">
							<p class="text-info">@{{ editEvent.details }}</p>
						</div>
					</div>

				</div>
			</div>

			<div class="col s12">
				<div class="modal-footer">
					<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
					<button class="btn waves-effect waves-light" type="submit" name="action" id="myBoton">Editar
						<i class="material-icons">edit</i>
					</button>
				</div>
			</div>

		</div>


</div>
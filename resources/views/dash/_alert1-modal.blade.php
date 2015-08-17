<div id="modal4" class="modal">

	<div class="modal-content">
		<h4>Editar Evento</h4>
		<p>Estas de acuerdo en cambiar la hora del evento "<span class="red-text"><strong>@{{ editEvent.title }}</strong></span>" a la fecha de <span class="red-text"><strong>@{{ editInitTime }}</strong></span> a
			<span class="red-text"><strong>@{{ editEndTime }}</strong></span></p>
	</div>
	<div class="modal-footer">
		<a href="#!" class=" modal-action modal-close waves-effect waves-green red btn" v-on="click: closeAlertModal">Cancelar</a>
		<a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat" v-on="click: actionEditEvent">Aceptar</a>
	</div>

</div>
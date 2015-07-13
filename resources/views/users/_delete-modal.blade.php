<div id="modal2" class="modal">
	<div class="modal-content">
		<h4 class="red-text darken-2"><i class="material-icons small">info</i> Advertencia, vas a desactivar a un usuario</h4>
		<p>¿Estas seguro de esta ejecutar esta operación?, vas a <span class="blue-text">desactivar</span> a <strong class="blue-text">@{{ userName[0].name }}</strong>, esta operación podra revertirse pero el usuarion en concreto no podra acceder a sistema de ninguna forma mientras no cambies el estado.</p>
	</div>
	<div class="modal-footer">
		<a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat red white-text" v-on="click: onDestroy(userName[0])">Desactivar</a>
		<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat " v-on="click: getCloseDestroy">Cancelar</a>
	</div>
</div>
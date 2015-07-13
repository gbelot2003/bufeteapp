<div id="modal4" class="modal">
	<div class="modal-content">
		<h4 class="blue-text darken-1"><i class="material-icons small">info</i> Advertencia, vas a re-activar a un usuario</h4>
		<p>¿Estas seguro de esta ejecutar esta operación?, vas a <span class="blue-text">re-activar</span> a <strong class="blue-text">@{{ userName[0].name }}</strong>, esta operación podra revertirse y el usuario en concreto tendra acceso al sistema nuevamente.</p>

	</div>
	<div class="modal-footer">
		<a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat blue white-text" v-on="click: onDestroy(userName[0])">Re Activar</a>
		<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat " v-on="click: getCloseDestroy">Cancelar</a>
	</div>
</div>
<div id="modal2" class="modal">
	<div class="modal-content">
		<h4 class="red-text darken-2"><i class="material-icons small">info</i> Advertencia, Este registro va a eliminara</h4>
		<p>¿Estas seguro de esta ejecutar esta operación?, vas a eliminar <strong class="red-text">@{{ contactos.name }}</strong> y sus registros relacionados, esta no se puede deshacer</p>
	</div>
	<div class="modal-footer">
		<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat " v-on="click: modalDestroy">Cancelar</a>
		<a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat red white-text" v-on="click: onDestroy">Eliminar</a>
	</div>
</div>
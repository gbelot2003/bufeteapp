<div id="modal2" class="modal">
	<div class="modal-content">
		<h4 class="red-text darken-2"><i class="material-icons small">info</i> Advertencia, vas a eliminar un registro</h4>
		<p>¿Estas seguro de esta ejecutar esta operación?, vas a eliminar <strong class="red-text">@{{ permsName[0].display_name }}</strong> esta no se puede deshacer</p>
	</div>
	<div class="modal-footer">
		<a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat red white-text" v-on="click: onDestroy(permsName[0])">Eliminar</a>
		<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat " v-on="click: getCloseDestroy">Cancelar</a>
	</div>
</div>
<div id="modal3" class="modal">
	<form method="post" v-on="submit: OnSubmitEditForm">
		<div class="modal-content">
			<h4>Editar</h4>

			<div class="row">

				<div class="col s12 m6">
					<div class="">
						<input id="title" name="title" type="text" length="55" v-model='datos.title'>
						<label for="name">
							Nombre
							<span class="error red-text" v-if=" ! datos.title">*</span>
						</label>
					</div>
				</div>

				<div class="col s12 m6">
					<div class="">
						<input type="date" class="datepicker" v-model="datos.date">
						<label for="date">
							Fecha
						</label>
					</div>
				</div>

			</div>

			<div class="row">
				<div class="">
					<textarea name="details" id="details" cols="30" rows="4" class="materialize-textarea" v-model="datos.body"></textarea>
					<label for="textarea1">Descripción</label>
				</div>    
			</div>

		</div>
		<div class="modal-footer">
			<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat" v-on="click: getCloseEdit">Cancelar</a>
			<button class="waves-effect waves-green btn btn-primary" v-attr="disabled: editError">Crear</button>
		</div>
	</form>
</div>
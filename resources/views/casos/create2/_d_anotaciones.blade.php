<div class="row" xmlns="http://www.w3.org/1999/html">
	<div class="input col s12">

		<label for="casos.descripcion">Descripción</label>
		<textarea id="descripcion" name="description" v-description v-model="caso.descripcion" v-attr="disabled: ! caso.juez_id"/></textarea>

	</div>
</div>

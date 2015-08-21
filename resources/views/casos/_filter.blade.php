<div class="row">
	<fieldset>
		<div class="col s9">
			<div class="input-field">
				<i class="material-icons prefix blue-text">search</i>
				<input id="searchkey" type="text" v-on="keyup:getSearch(searchKey) | key 'enter'" v-model="searchKey" lazy />
				<label for="searchkey">Buscar</label>
				<span style="font-size: 0.8rem">Presiona Enter para ejecutar busqueda</span>
			</div>
		</div>
		<div class="col s3">
			<label>Mostrar Cerrados</label>
			<div class="switch">
				<label>
					Off
					<input type="checkbox" v-model="showNoActives">
					<span class="lever"></span>
					On
				</label>
			</div>
		</div>
	</fieldset>
</div>
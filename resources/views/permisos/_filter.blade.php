<div class="row">
	<fieldset>
		<div class="input-field">
			<i class="material-icons prefix blue-text">search</i>
			<input id="searchkey" type="text" v-on="keyup:getSearch(searchKey) | key 'enter'" v-model="searchKey" lazy />
			<label for="searchkey">Buscar</label>
			<span style="font-size: 0.8rem">Presiona Enter para ejecutar busqueda</span>
		</div>
	</fieldset>
</div>
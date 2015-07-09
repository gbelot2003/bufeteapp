<div class="row">
	<div class="input-field">
		<input id="searchkey" type="text" v-on="keyup:getSearch(searchKey) | key 'enter'" v-model="searchKey" lazy />
		<label for="searchkey">Buscar</label>
		<span style="font-size: 0.8rem">Presiona Enter para ejecutar busqueda</span>
	</div>
</div>
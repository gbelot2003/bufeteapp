<div class="row">
	<fieldset>
		<div class="col input-field s12 m9">
			<i class="material-icons prefix blue-text">search</i>
			<input id="searchkey" type="text" v-on="keyup:getSearch(searchKey) | key 'enter'" v-model="searchKey" lazy />
			<label for="searchkey">Buscar</label>
			<span style="font-size: 0.8rem">Presiona Enter para ejecutar busqueda</span>
		</div>
		<div class="col s12 m3">
			<p>
				<input type="checkbox" id="test5" v-model="showNoActives" />
				<label for="test5">Mostrar usuarios desactivados</label>
			</p>
		</div>
	</fieldset>
</div>
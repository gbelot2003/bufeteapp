<div class="col s12">
	<fieldset class="col s12">
		<input type="hidden" v-model="cid" value="{{ $cliente->id }}"/>
		<div class="col s6 center-align">
			<a class="btn-floating btn-small waves-effect waves-light">
				<i class="material-icons blue" v-on="click: setShowForm" v-show="! showForm">add</i>
				<i class="material-icons red" v-on="click: setShowForm" v-show="showForm">stop</i>
			</a>
		</div>
		<div class="col s6" v-if="rows.length">
			<label for="">Activar Busqueda</label>
			<div class="switch">
				<label>
					Off
					<input type="checkbox" v-model="search" v-on="check: setSearch">
					<span class="lever"></span>
					On
				</label>
			</div>
		</div>
		<div class="col s12">
			<hr/>
		</div>
		<div class="col s12 " v-show="search" v-transition="expand">
			<div class="input-field s12">
				<input type="text" name="search" v-model="searchText"/>
				<label for="email">
					Busqueda
				</label>
			</div>
		</div>
	</fieldset>
</div>
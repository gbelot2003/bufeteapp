<div class="col s12" v-repeat="row:rows[0].contactos | filterBy searchText in row">

	<div class="card blue-grey darken-1">
		<div class="card-content white-text">

			<span class="card-title">
				<a class="click-info" href="#!" v-on="click: selectedRow(row)">
					<i class="material-icons"  v-class="yellow-text: selected == row.id">perm_contact_calendar</i>
				</a>
				<small>@{{ row.name }}</small>
			</span>
			<p v-if="row.cargo">@{{ row.cargo }}</p>
			<ul class="collection black-text" v-if="selected == row.id" v-transition="oexpand">
				<li v-if="row.email" href="#!" class="collection-item">@{{ row.email }}</li>
				<li v-if="row.phone" href="#!" class="collection-item">@{{ row.phone }} </li>
				<li v-if="row.movil" href="#!" class="collection-item">@{{ row.movil }} </li>
			</ul>
			<p v-if="row.notes">@{{ row.notes }}</p>
			<div class="card-action" v-if="selected == row.id" v-transition="oexpand">
				<a href="#" v-on="click: editRegister(row)">Editar</a>
			</div>
		</div>
	</div>
</div>
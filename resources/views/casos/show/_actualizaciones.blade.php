<div class="col s12">
	<a id="create" class="modal-trigger btn-floating btn-small waves-effect waves-light blue right" href="#modal1"><i class="material-icons">add</i></a>
</div>
<div class="col s12  teal lighten-5" v-repeat="row: rows">
	<div class="row">
		<table class="borders table-striped">
			<thead>
				<th>Actualización</th>
				<th>Fecha</th>
				<th>Usuario</th>
				<th>acciones</th>
			</thead>
			<tbody>
				<tr>
					<td>@{{ row.title }}</td>
					<td>@{{ row.date }}</td>
					<td>@{{ row.users.name }}</td>
					<td>borrar | <a href="#!" v-on="click: editForm(row)">Editar</a></td>
				</tr>
				<tr>
					<th colspan="4">Descripción</th>
				</tr>
				<tr>
					<td colspan="4">@{{ row.body }}</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
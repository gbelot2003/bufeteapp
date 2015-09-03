<div class="col s12">
	<a id="create" class="modal-trigger btn-floating btn-small waves-effect waves-light blue right" href="#modal1"><i class="material-icons">add</i></a>
</div>
<div class="col s12">
	<div class="row">
		<div class="col s12 m9">
			<table class="borders table-striped">
				<thead>
				</thead>
				<tbody>
				<tr class="teal lighten-5">
					<td colspan="2">
						<div class="col s10">
							<strong>Fecha :</strong> @{{ setReadTime(show.date) }}
						</div>
						<div class="col s2">
						</div>
					</td>
				</tr>
				<tr>
					<th colspan="4">Descripción : </th>
				</tr>
				<tr>
					<td colspan="4" v-html="show.descripcion"></td>
				</tr>
				</tbody>
				<tfooter>
					<tr class="yellow lighten-5">
						<td><strong>Usuario :</strong> @{{ show.users.name }}</td>
						<td>borrar | <a href="#!" v-on="click: editForm()">Editar</a></td>
					</tr>
				</tfooter>
			</table>
		</div>
		<div class="col s12 m3">
			<h5>Listado de actualizaciones</h5>
			<ul>
				<li v-repeat="row:rows">
					<div class="row">
						<div class="col s12">
							<a href="#!" v-on="click: setShowData(row)"><i class="tiny material-icons">today</i> @{{ setReadTime(row.date) }}</a>
						</div>
						<div class="col s12">
							<strong>Usuario :</strong> @{{ row.users.name }}
						</div>
						<hr/>
					</div>

				</li>
			</ul>
		</div>
	</div>
</div>
<table class="table bordered responsive-table">
	<caption>Datos del caso</caption>
	<thead>
		<th>Cliente</th>

		<th>Tipo</th>

		@if($caso->tipocaso_id == 1)
		<th>Demandado</th>
		@endif

		@if($caso->tipocaso_id == 2)
			<th>Demandante</th>
		@endif

		<th>Tribunal</th>
		<th>Instancia</th>

		<th>Juez</th>

		<th class="red-text">Estado</th>
	</thead>
	<tbody>
		<tr>
			<td><a href="{{ url('/clientes', $caso->clientes->slug) }}">{{ $caso->clientes->name }}</a></td>

			<td><strong>{{ $caso->tipocasos->name }} : {{ $caso->tipojuicio }}</strong></td>

			@if($caso->tipocaso_id == 1)

				<td>{{ $caso->demandado }}</td>

			@endif

			@if($caso->tipocaso_id == 2)
				<td>{{ $caso->demandante }}</td>
			@endif

			<td><strong>{{ $caso->tribunales->name }}</strong></td>

			<td><strong>{{ $caso->instancia }}</strong></td>

			<td><strong>{{ $caso->jueces->name }}</strong></td>

			<td><strong>{{ $caso->estadoTrans($caso->estado) }}</strong></td>
		</tr>
	</tbody>
</table>


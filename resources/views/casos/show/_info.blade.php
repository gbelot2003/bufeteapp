<table class="table bordered responsive-table">
	<caption>Datos del caso</caption>
	<thead>
		<th>Cliente</th>

		<th>Tribunal</th>

		<th>Tipo</th>

		<th>Instancia</th>

		@if($caso->hasDemandados())
			<th>Demandado(s)</th>
		@endif

		@if($caso->hasDemandantes())
			<th>Demandante(s)</th>
		@endif

		@if($caso->hasTercerias())
			<th>Tercerias</th>
		@endif

		<th>Juez</th>

		<th class="red-text">Estado</th>
	</thead>
	<tbody>
		<tr>
			<td><a href="{{ url('/clientes', $caso->clientes->slug) }}">{{ $caso->clientes->name }}</a></td>

			<td><strong>{{ $caso->tribunales->name }}</strong></td>

			<td><strong>{{ $caso->tipocasos->name }} : {{ $caso->tipojuicio }}</strong></td>

			<td><strong>{{ $caso->instancia }}</strong></td>

			@if($caso->hasDemandados())
				<td>
				<ul>
					@foreach($caso->demandados as $contrapartes)
						<li>{{ $contrapartes->contactos->name }}</li>
					@endforeach
				</ul>
				</td>
			@endif

			@if($caso->hasDemandantes())
				<td>
					<ul>
					@foreach($caso->demandantes as $contrapartes)
						<li>{{ $contrapartes->tipo }} - {{ $contrapartes->contactos->name }}</li>
					@endforeach
					</ul>
				</td>
			@endif

			@if($caso->hasTercerias())
				<td>Tecerias</td>
			@endif

			<td><strong>{{ $caso->jueces->name }}</strong></td>

			<td><strong>{{ $caso->estadoTrans($caso->estado) }}</strong></td>
		</tr>
	</tbody>
</table>


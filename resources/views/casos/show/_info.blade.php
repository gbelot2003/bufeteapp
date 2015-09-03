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

					@foreach($caso->demandados as $contrapartes)
						{{ $contrapartes->contactos->name }}, </li>
					@endforeach
				</td>
			@endif

			@if($caso->hasDemandantes())
				<td>
					@foreach($caso->demandantes as $contrapartes)
						{{ $contrapartes->tipo }} - {{ $contrapartes->contactos->name }},
					@endforeach

				</td>
			@endif

			@if($caso->hasTercerias())
				<td>
					@foreach($caso->tercerias as $tercerias)
						{{ $tercerias->contactos->name }},
					@endforeach
				</td>
			@endif

			<td><strong>{{ $caso->jueces->name }}</strong></td>

			<td><strong>{{ $caso->estadoTrans($caso->estado) }}</strong></td>
		</tr>
	</tbody>
</table>


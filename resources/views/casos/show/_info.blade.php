<div class="row">
	<div class="col m3 s12">
		<div class="row">
			<div class="col m11 fheader">Cliente :</div>
			<div class="col m11 blue lighten-5 showInfo"><strong><a href="{{ url('/clientes', $caso->clientes->slug) }}">{{ $caso->clientes->name }}</a></strong></div>
		</div>
	</div>

	<div class="col m3 s12">
		<div class="row">
			<div class="col m11 fheader">Tribunal :</div>
			<div class="col m11 blue lighten-5 showInfo"><strong>{{ $caso->tribunal }}</strong></div>
		</div>
	</div>

	<div class="col m3 s12">
		<div class="row">
			<div class="col m11 fheader">Tipo :</div>
			<div class="col m11 blue lighten-5 showInfo"><strong>{{ $caso->tipocasos->name }} : {{ $caso->tipojuicio }}</strong></div>
		</div>
	</div>

	<div class="col m3 s12">
		<div class="row">
			<div class="col m11 fheader">Juez :</div>
			<div class="col m11 blue lighten-5 showInfo"><strong>{{ $caso->jueces->name }}</strong></div>
		</div>
	</div>

</div>

<div class="row">
	<div class="col m6 s12">
		<div class="row">
			<div class="col m11 fheader">Demandante :</div>
			<div class="col m11 blue lighten-5 showInfo"><strong>{{ $caso->demandante }}</strong></div>
		</div>
	</div>

	<div class="col m6 s12">
		<div class="row">
			<div class="col m11 fheader">Demandado :</div>
			<div class="col m11 blue lighten-5 showInfo"><strong>{{ $caso->demandado }}</strong></div>
		</div>

	</div>

	<div class="col s12">
		<p>{!! $caso->descripcion !!}</p>
	</div>
</div>

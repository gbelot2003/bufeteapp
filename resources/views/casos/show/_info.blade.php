<div class="row">
	<div class="col m3 s12">
		<div class="row">
			<div class="col m11 fheader">Cliente :</div>
			<div class="col m11 purple lighten-5"><strong>{{ $caso->clientes->name }}</strong></div>
		</div>
	</div>

	<div class="col m3 s12">
		<div class="row">
			<div class="col m11 fheader">Tribunal :</div>
			<div class="col m11 purple lighten-5"><strong>{{ $caso->tribunal }}</strong></div>
		</div>
	</div>

	<div class="col m3 s12">
		<div class="row">
			<div class="col m11 fheader">Tipo :</div>
			<div class="col m11 purple lighten-5"><strong>{{ $caso->tipocasos->name }} : {{ $caso->tipojuicio }}</strong></div>
		</div>
	</div>



</div>

<div class="row">
	<div class="col m6 s12">
		<div class="row">
			<div class="col m11 fheader">Demandante :</div>
			<div class="col m11 purple lighten-5"><strong>{{ $caso->demandante }}</strong></div>
		</div>
	</div>

	<div class="col m6 s12">
		<div class="row">
			<div class="col m11 fheader">Demandado :</div>
			<div class="col m11 purple lighten-5"><strong>{{ $caso->demandado }}</strong></div>
		</div>

	</div>

	<div class="col s12">
		<p>{!! $caso->descripcion !!}</p>
	</div>
</div>

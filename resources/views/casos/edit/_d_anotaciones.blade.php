<div class="row">

	<div class="col m4 s6">
		<label for="csj">No. Corte suprema de Justicia</label>
		<input type="text" value="{{ $caso->csj }}" id=""csj name="csj"/>
	</div>

	<div class="col m4 s6">
		<label for="">No. Corte de apelaciones</label>
		<input type="text" id="ca" value="{{ $caso->ca }}" name="ca"/>
	</div>


	<div class="col m4 s12">
		<label for="">Honorarios</label>
		<input type="text"  id="honorarios" value="{{ $caso->honorarios }}" name="honorarios"/>
	</div>

</div>
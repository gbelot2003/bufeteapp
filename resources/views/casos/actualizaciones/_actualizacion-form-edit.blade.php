<div class="col s12">
	<form method="post" action="/actualizaciones/store">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="caso_id" value="{{ $caso->id }}"/>
		<div class="modal-content">
			<h4>Nueva Actualización</h4>

			<div class="row">

				<div class="col s12 m8">
					<div class="">
						<label for="date">
							Fecha
						</label>
						<input type="date" value="{{ $actualizacion->date }}" name="date" class="datepicker">
					</div>
				</div>

				<div class="input-field col s12 m4">
					<select name="importancia">
						@if($actualizacion->importancia == false)
							<option value="2" selected disabled>Sin actualizar</option>
						@else
							<option value="1" selected disabled>Actualiza estado</option>
						@endif
						<option value="1">Actualiza estado</option>
						<option value="2">Sin actualizar</option>
					</select>
				</div>

			</div>

			<div class="row">
				<div class="input col s12">
					<label for="casos.descripcion">Descripción</label>
					<textarea id="descripcion" name="descripcion">
					{{ $actualizacion->descripcion }}
					</textarea>
				</div>
			</div>

		</div>
		<div class="modal-footer">
			<a href="{{ action('CasosController@show', $caso->slug) }}" class="waves-effect waves-green btn-flat">Cancelar</a>
			<button class="waves-effect waves-green btn btn-primary">Crear</button>
		</div>
	</form>
</div>
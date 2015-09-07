<div class="row">

	@if($caso->tipocaso_id == 1)
	<div class="col s12 m6">
		<!-- Demandantes Form Input -->
		<div class="field">
			<label for="contraparte"><span id="lcontraparte">Demandado(s)</span></label>
			<select name="demandados[]" id="contraparte" class="select form-control" multiple>
				@foreach($contrapartes as $contraparte)
					<option value="{{ $contraparte->contacto_id }}" selected>{{ $contraparte->contactos->name }}</option>
				@endforeach
			</select>
		</div>

	</div>
	@elseif($caso->tipocaso_id == 2)
		<div class="col s12 m6">
			<!-- Demandado Form Input -->
			<div class="field">
				<label for="contraparte"><span id="lcontraparte">Demandantes(s)</span></label>
				<select name="demandantes[]" id="contraparte" class="select form-control" multiple>
					@foreach($contrapartes as $contraparte)
						<option value="{{ $contraparte->contacto_id }}" selected>{{ $contraparte->contactos->name }}</option>
					@endforeach
				</select>
			</div>

		</div>
	@endif


	<div class="col s12 m6">
		<!-- Terceria Form Input -->
		<div class="field">
			{!! Form::label('Terceria', "Tercerias") !!}
			<select name="tercerias[]" id="tercerias" class="select form-control" multiple>
				@foreach($tercerias as $terceria)
					<option value="{{ $terceria->contacto_id }}" selected>{{ $terceria->contactos->name }}</option>
				@endforeach
			</select>
		</div>

	</div>


</div>

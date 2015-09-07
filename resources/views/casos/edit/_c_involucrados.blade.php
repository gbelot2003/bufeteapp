<div class="row">

	<div class="col s12 m6">
		<!-- Demandado Form Input -->
		<div class="field">
			<label for="contraparte"><span id="lcontraparte">Contraparte</span></label>
			<select name="contraparte[]" id="contraparte" class="select form-control" multiple>
				@foreach($caso->contrapartes as $contrapartes)
					<option value="{{ $contrapartes->contacto_id }}" selected>{{ $contrapartes->contactos->name }}</option>
				@endforeach
			</select>
		</div>

	</div>

	<div class="col s12 m6">
		<!-- Demandado Form Input -->
		<div class="field">
			{!! Form::label('Terceria', "Tercerias") !!}
			<select name="tercerias[]" id="tercerias" class="select form-control" multiple>
				@foreach($caso->tercerias as $tercerias)
					<option value="{{ $tercerias->contacto_id }}" selected>{{ $tercerias->contactos->name }}</option>
				@endforeach
			</select>
		</div>

	</div>

</div>

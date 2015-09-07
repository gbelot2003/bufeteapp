<div class="col m4 s12">
	<label for="estado">Estado de caso</label>
	<select class="browser-default" name="estado" id="estado">
		@if($caso->estado == 1)
			<option selected value="1">Abierto</option>
		@else
			<option selected value="2">Cerrado</option>
		@endif
		<option value="1">Abierto</option>
		<option value="2">Cerrado</option>
	</select>
</div>
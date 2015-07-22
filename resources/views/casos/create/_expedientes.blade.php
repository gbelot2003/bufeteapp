<div class="col s12 m6">
	<!-- Csj Form Input -->
	<div class="form-group">
		{!! Form::label('csj', "Numero de expediente csj:") !!}
		{!! Form::text("csj", null, ['class' => 'form-control', 'v-model' => 'caso.csj']) !!}
	</div>
</div>
<div class="col s12 m6">
	<!-- Ca Form Input -->
	<div class="form-group">
		{!! Form::label('ca', "Numero de expediente csj:") !!}
		{!! Form::text("ca", null, ['class' => 'form-control', 'v-model' => 'caso.ca']) !!}
	</div>
</div>
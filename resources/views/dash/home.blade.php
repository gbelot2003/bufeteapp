@extends('calendar')
@section('title', '')
@section('link-button')
	<a id="showCalendarForm" class="btn-floating btn-large waves-effect waves-light blue" href="#¡"><i class="material-icons">add</i></a>
	<a id="hideCalendarForm" class="btn-floating btn-large waves-effect waves-light red" href="#¡"><i class="material-icons">remove</i></a>
@stop
@section('content')
	<div class="row" id="dashboard">

		<div id="calendarWrapper" class="col s12 m12 diverblock">
			<div  id="calendar"></div>
		</div>

		<div id="formWrapper" class="col s12 m4">
			<form action="post" id="formulario">

				<div class="col s12 amber lighten-5 diverblock">
					<span><strong>Inicio</strong></span>
					<div class="row">
						<div class="s12 col">
							<div class="input-field">
								<input type="text" name="title" id="inputTitle"/>
								<label for="title">Titulo</label>
							</div>
						</div>
						<div class="s12 m6 col">
							<input type="date" name="start_day" value="<?php echo date('Y-m-d'); ?>" id="inputStartDay"/>
						</div>

						<div class="s12 m6 col">
							<input type="time" name="start_hour" value="<?php echo date('H:i'); ?>" id="inputStartHour"/>
						</div>
						<div class="s12 col">
							<label>¿Todo el día?</label>
							<div class="switch">
								<label>
									No
									<input type="checkbox" class="blue" id="inputCheckBox">
									<span class="lever"></span>
									Si
								</label>
							</div>
						</div>
					</div>
				</div>

				<div class="col s12 amber lighten-5 diverblock">
					<span><strong>Fin</strong></span>
					<div class="row">

						<div class="s12 m6 col">
							<div class="input-field">
								<input type="date" name="end_day" value="<?php echo \Carbon\Carbon::now()->format('Y-m-d'); ?>" id="inputEndDay"/>
							</div>
						</div>

						<div class="s12 m6 col">
							<div class="input-field">
								<input type="time" name="end_hour" value="<?php echo \Carbon\Carbon::now()->addHours(2)->format('H:i'); ?>" id="inputEndHour"/>
							</div>
						</div>
					</div>
				</div>
				<div class="col s12">
					<button class="btn waves-effect waves-light" type="submit" name="action" id="myBoton">Crear
						<i class="material-icons">send</i>
					</button>
				</div>
			</form>
			<div class="col s12">
			</div>
		</div>
	</div>
@stop


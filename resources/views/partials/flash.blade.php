@if(Session::has('flash_message'))
<div id="flash_success" class="card-panel #1565c0 blue darken-3">
	<button class="close" type="button" data-dismiss="alert" aria-hidden="true">&times;</button>
	<span class="white-text"><i class="smaller material-icons">done</i>{{Session('flash_message')}}</span>
</div>
@elseif(Session::has('errors'))
	<div id="flash_error" class="card-panel #c62828 red darken-3">
		<button class="close" type="button" data-dismiss="alert" aria-hidden="true">&times;</button>
		 <span class="white-text"><i class="smaller material-icons">error</i><strong>Whoops!</strong> Hay algunos problemas con su entrada de datos!!!.</span>
		<br><br>
		<ol>
			@foreach ($errors->all() as $error)
				<li><span class="white-text">{{ $error }}</span></li>
			@endforeach
		</ol>
	</div>
@endif
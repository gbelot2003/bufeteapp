@extends('app')

@section('content')
	<table class="table bordered striped hoverable responsive-table">
		<thead>
			<th>Nombre</th>
			<th>Tipo</th>
			<th>Cargo</th>
			<th>Notas</th>
			<th>Teléfono</th>
			<th>Celular</th>
			<th>E-mail</th>
		</thead>
		<tbody>
		@foreach($contactos as $contacto)
			<tr>
				<td>{{ $contacto->name }}</td>
				<td>{{ $contacto->type }}</td>
				<td>{{ $contacto->cargo }}</td>
				<td>{{ $contacto->notes }}</td>
				<td>{{ $contacto->phone }}</td>
				<td>{{ $contacto->movil }}</td>
				<td>{{ $contacto->email }}</td>
			</tr>
		@endforeach
		</tbody>
	</table>
@stop
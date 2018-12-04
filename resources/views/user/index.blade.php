@extends('layouts.template')
@section('content')
<table class="uk-table uk-table-divider uk-table-striped">
	<thead>
		<tr>
			<th>usuario</th>
			<th>nombres</th>
			<th>apellidos</th>
			<th>accion</th>
		</tr>
	</thead>
	<tbody>
		@foreach($usuarios as $usuario)
		<tr>
			<td>{{ $usuario->user }}</td>
			<td>{{ $usuario->first_name }}</td>
			<td>{{ $usuario->last_name }}</td>
			<td>
				<a href="#">Ver</a>
				<a href="#">Editar</a>
				<a href="#">Eliminar</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection
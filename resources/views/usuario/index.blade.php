@extends('layouts.admin')

@include('alerts.success')

@section('content')

	<hr>
	
	<h3><i class="fa fa-angle-right"></i> Usuarios </h3>

	<hr>

	<table id="tabla" class="display" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Correo</th>
				<th>Operaciones</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th>Nombre</th>
				<th>Correo</th>
				<th>Operaciones</th>
			</tr>
		</tfoot>
		<tbody>
			@foreach($users as $user)
			<tr>
				<td>{{$user->name}}</td>
				<td>{{$user->email}}</td>
				<td>
					{!!Form::open(['route' => ['usuario.destroy', $user -> id], 'method' => 'DELETE'])!!}
						{!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $user -> id, $attributes = ['class'=>'btn btn-primary'])!!}
						{!!Form::submit('Eliminar', ['class'=>'btn btn-danger'])!!}
					{!!Form::close()!!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<hr>

@stop

@section('scripts')
	{!!Html::script('js/table.js')!!}
@endsection
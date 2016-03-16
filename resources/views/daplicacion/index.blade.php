@extends('layouts.principal')

@section('content')

	@include('alerts.success')
	
	<h3><i class="fa fa-angle-right"></i> Descripciones </h3>

	<hr>

	<table id="tabla" class="display" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>ID</th>
				<th>Aplicación</th>
				<th>Descripción</th>
				<th>Versión</th>
				<th>Editar</th>
				<th>Eliminar</th>
			</tr>		
		</thead>
		<tfoot>
			<tr>
				<th>ID</th>
				<th>Aplicación</th>
				<th>Descripción</th>
				<th>Versión</th>
				<th>Editar</th>
				<th>Eliminar</th>
			</tr>		
		</tfoot>
		<tbody>
			@foreach($daplicaciones as $daplicacion)
			<tr>
				<td>{{$daplicacion->id}}</td>
				<td>{{$daplicacion->aplicaciones_id}}</td>
				<td>{{$daplicacion->descripcion}}</td>
				<td>{{$daplicacion->version}}</td>
				<td>
					{!!link_to_route('daplicacion.edit', $title = 'Editar', $parameters = $daplicacion -> id, $attributes = ['class'=>'btn btn-primary'])!!}
				</td>
				<td>
					{!!Form::open(['route' => ['daplicacion.destroy', $daplicacion -> id], 'method' => 'DELETE'])!!}
						{!!Form::submit('Eliminar', ['class'=>'btn btn-danger'])!!}
					{!!Form::close()!!}
				</td>
			</tr>
		</tbody>
		@endforeach
	</table>

	<hr>

	{!!link_to('/daplicacion/create', $title='Agregar Descripción', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}
	{!!link_to('/aplicacion', $title='Ver Aplicaciones', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}

@stop

@section('scripts')
	{!!Html::script('js/table.js')!!}
@endsection
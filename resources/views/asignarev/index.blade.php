@extends('layouts.principal')

@section('content')

	@include('alerts.success')
	
	<h3><i class="fa fa-angle-right"></i> Aplicaciones en Elementos Virtuales </h3>

	<hr>

	<table id="tabla" class="display" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>ID</th>
				<th>Elemento Virtual</th>
				<th>Aplicación</th>
				<th>Editar</th>
				<th>Eliminar</th>
			</tr>		
		</thead>
		<tfoot>
			<tr>
				<th>ID</th>
				<th>Elemento Virtual</th>
				<th>Aplicación</th>
				<th>Editar</th>
				<th>Eliminar</th>
			</tr>		
		</foot>
		<tbody>
			@foreach($asignarevs as $asignarev)
			<tr>
				<td>{{$asignarev->id}}</td>
				<td>{{$asignarev->evirtual->nombre}}</td>
				<td>{{$asignarev->aplicaciones_id}}</td>
				<td>
					{!!link_to_route('asignarev.edit', $title = 'Editar', $parameters = $asignarev -> id, $attributes = ['class'=>'btn btn-primary'])!!}
				</td>
				<td>
					{!!Form::open(['route' => ['asignarev.destroy', $asignarev -> id], 'method' => 'DELETE'])!!}
						{!!Form::submit('Eliminar', ['class'=>'btn btn-danger'])!!}
					{!!Form::close()!!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<hr>
	
	{!!link_to('/asignarev/create', $title='Agregar Asignación', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}
	{!!link_to('/apps', $title='Ver Aplicaciones', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}
	{!!link_to('/evirtual', $title='Ver Elementos Virtuales', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}

@stop

@section('scripts')
	{!!Html::script('js/table.js')!!}
@endsection
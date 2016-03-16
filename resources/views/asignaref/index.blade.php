@extends('layouts.principal')

@section('content')

	@include('alerts.success')

	<h3><i class="fa fa-angle-right"></i> Aplicaciones en Elementos Físicos </h3>

	<hr>
	
	<table id="tabla" class="display" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>ID</th>
				<th>Elemento Físico</th>
				<th>Aplicación</th>
				<th>Editar</th>
				<th>Eliminar</th>
			</tr>		
		</thead>
		<tfoot>
			<tr>
				<th>ID</th>
				<th>Elemento Físico</th>
				<th>Aplicación</th>
				<th>Editar</th>
				<th>Eliminar</th>
			</tr>		
		</tfoot>
		<tbody>
			@foreach($asignarefs as $asignaref)
			<tr>
				<td>{{$asignaref->id}}</td>
				<td>{{$asignaref->efisico->nombre}}</td>
				<td>{{$asignaref->aplicaciones_id}}</td>
				<td>
					{!!link_to_route('asignaref.edit', $title = 'Editar', $parameters = $asignaref -> id, $attributes = ['class'=>'btn btn-primary'])!!}
				</td>
				<td>
					{!!Form::open(['route' => ['asignaref.destroy', $asignaref -> id], 'method' => 'DELETE'])!!}
						{!!Form::submit('Eliminar', ['class'=>'btn btn-danger'])!!}
					{!!Form::close()!!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<hr>
	
	{!!link_to('/asignaref/create', $title='Agregar Asignación', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}
	{!!link_to('/apps', $title='Ver Aplicaciones', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}
	{!!link_to('/efisico', $title='Ver Elementos Físicos', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}

@stop

@section('scripts')
	{!!Html::script('js/table.js')!!}
@endsection
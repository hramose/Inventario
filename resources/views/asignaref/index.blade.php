@extends('layouts.principal')

@section('content')

	@include('alerts.success')

	<h3><i class="fa fa-angle-right"></i> Aplicaciones en Elementos Físicos </h3>

	<hr>
	
	<table id="tabla" class="display" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre del Host</th>
				<th>Aplicación</th>
				<th>Operaciones</th>
			</tr>		
		</thead>
		<tfoot>
			<tr>
				<th>ID</th>
				<th>Nombre del Host</th>
				<th>Aplicación</th>
				<th>Operaciones</th>
			</tr>		
		</tfoot>
		<tbody>
			@foreach($asignarefs as $asignaref)
			<tr>
				<td>{{$asignaref->id}}</td>
				<td>{{$asignaref->efisico->nombre}}</td>
				<td>{{$asignaref->aplicacion->nombre}}</td>
				<td>
					{!!Form::open(['route' => ['asignaref.destroy', $asignaref -> id], 'method' => 'DELETE'])!!}
						{!!link_to_route('asignaref.edit', $title = 'Editar', $parameters = $asignaref -> id, $attributes = ['class'=>'btn btn-primary'])!!}
						{!!Form::submit('Eliminar', ['class'=>'btn btn-danger'])!!}
					{!!Form::close()!!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<hr>
		
	{!!link_to('/asignaref/create', $title='Nueva asignación', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/efisico', $title='Elementos físicos', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/aplicacion', $title='Aplicaciones', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	
	<hr>

@stop

@section('scripts')
	{!!Html::script('js/table.js')!!}
@endsection
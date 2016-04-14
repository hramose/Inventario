@extends('layouts.principal')

@section('content')

	@include('alerts.success')
	
	<h3><i class="fa fa-angle-right"></i> Aplicaciones en Elementos Virtuales </h3>

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
		</foot>
		<tbody>
			@foreach($asignarevs as $asignarev)
			<tr>
				<td>{{$asignarev->id}}</td>
				<td>{{$asignarev->evirtual->nombre}}</td>
				<td>{{$asignarev->aplicacion->nombre}}</td>
				<td>
					{!!Form::open(['route' => ['asignarev.destroy', $asignarev -> id], 'method' => 'DELETE'])!!}
						{!!link_to_route('asignarev.edit', $title = 'Editar', $parameters = $asignarev -> id, $attributes = ['class'=>'btn btn-primary'])!!}
						{!!Form::submit('Eliminar', ['class'=>'btn btn-danger'])!!}
					{!!Form::close()!!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<hr>
		
	{!!link_to('/asignarev/create', $title='Nueva asignación', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/evirtual', $title='Elementos virtuales', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/aplicacion', $title='Aplicaciones', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	
	<hr>

@stop

@section('scripts')
	{!!Html::script('js/table.js')!!}
@endsection
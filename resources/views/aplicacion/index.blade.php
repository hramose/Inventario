@extends('layouts.principal')

@section('content')

	@include('alerts.success')

	<h3><i class="fa fa-angle-right"></i> Aplicaciones </h3>

	<hr>
	
	<table id="tabla" class="display" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Operaciones</th>
			</tr>		
		</thead>
		<tfoot>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Operaciones</th>
			</tr>		
		</tfoot>		
		<tbody>
			@foreach($aplicacions as $aplicacion)
			<tr>
				<td>{{$aplicacion->id}}</td>
				<td>{{$aplicacion->nomapp}}</td>
				<td>
					{!!Form::open(['route' => ['aplicacion.destroy', $aplicacion -> id], 'method' => 'DELETE'])!!}
						{!!link_to_route('aplicacion.edit', $title = 'Editar', $parameters = $aplicacion -> id, $attributes = ['class'=>'btn btn-primary'])!!}
						{!!Form::submit('Eliminar', ['class'=>'btn btn-danger'])!!}
					{!!Form::close()!!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<hr>
	
	{!!link_to('/aplicacion/create', $title='Nueva aplicación', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/daplicacion', $title='Descripciones', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/asignaref', $title='Aplicaciones en elementos físicos', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/asignarev', $title='Aplicaciones en elementos virtuales', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	
	<hr>

@stop

@section('scripts')
	{!!Html::script('js/table.js')!!}
@endsection
@extends('layouts.principal')

@section('content')
	
	@include('alerts.success')
	
	<h3><i class="fa fa-angle-right"></i> Historial de Mantenimiento </h3>

	<hr>

	<table id="tabla" class="display" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>Id</th>
				<th>Usuario</th>
				<th>Nombre del Host</th>
				<th>Fecha Ultimo Mantenimiento</th>
				<th>Observaciones</th>
				<th>Editar</th>
				<th>Eliminar</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th>Id</th>
				<th>Usuario</th>
				<th>Elemento Fisico</th>
				<th>Fecha Ultimo Mantenimiento</th>
				<th>Observaciones</th>
				<th>Editar</th>
				<th>Eliminar</th>
			</tr>
		</tfoot>
		<tbody>
			<@foreach($hefisicos as $hefisico)
			<tr>
				<td>{{$hefisico->id}}</td>
				<td>{{$hefisico->user->name}}</td>
				<td>{{$hefisico->efisico->nombre}}</td>
				<td>{{$hefisico->fec_ult_mantenimiento}}</td>
				<td>{{$hefisico->observaciones}}</td>
				<td>
					{!!link_to_route('hefisico.edit', $title = 'Editar', $parameters = $hefisico -> id, $attributes = ['class'=>'btn btn-primary'])!!}
				</td>
				<td>
					{!!Form::open(['route' => ['hefisico.destroy', $hefisico -> id], 'method' => 'DELETE'])!!}
						{!!Form::submit('Eliminar', ['class'=>'btn btn-danger'])!!}
					{!!Form::close()!!}
				</td>
			</tr>
			@endforeach
		</tbody>
		
	</table>

	<hr>
		
	{!!link_to('/hefisico/create', $title='Nuevo historial de mantenimiento', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/efisico', $title='Elementos físicos', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	
	<hr>

@stop

@section('scripts')
	{!!Html::script('js/table.js')!!}
@endsection
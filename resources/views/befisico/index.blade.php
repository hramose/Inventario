@extends('layouts.principal')

@section('content')
	
	@include('alerts.success')

	<h3><i class="fa fa-angle-right"></i> BackUp's </h3>

	<hr>

	<table id="tabla" class="display" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>Id</th>
				<th>Elemento Físico</th>
				<th>Fecha de BackUp</th>
				<th>Mecanismo</th>
				<th>Observación</th>
				<th>Editar</th>
				<th>Eliminar</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th>Id</th>
				<th>Elemento Físico</th>
				<th>Fecha de BackUp</th>
				<th>Mecanismo</th>
				<th>Observación</th>
				<th>Editar</th>
				<th>Eliminar</th>
			</tr>
		</tfoot>
		<tbody>
			@foreach($befisicos as $befisico)
			<tr>
				<td>{{$befisico->id}}</td>
				<td>{{$befisico->efisico->nombre}}</td>
				<td>{{$befisico->fec_backup}}</td>
				<td>{{$befisico->mecanismo}}</td>
				<td>{{$befisico->observacion}}</td>
				<td>
					{!!link_to_route('befisico.edit', $title = 'Editar', $parameters = $befisico -> id, $attributes = ['class'=>'btn btn-primary'])!!}
				</td>
				<td>
					{!!Form::open(['route' => ['befisico.destroy', $befisico -> id], 'method' => 'DELETE'])!!}
						{!!Form::submit('Eliminar', ['class'=>'btn btn-danger'])!!}
					{!!Form::close()!!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<hr>
	
	{!!link_to('/befisico/create', $title='Agregar BackUp', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}

@stop

@section('scripts')
	{!!Html::script('js/table.js')!!}
@endsection
@extends('layouts.principal')

@section('content')

	@include('alerts.success')
	
	<h3><i class="fa fa-angle-right"></i> Observaciones </h3>

	<hr>

	<table id="tabla" class="display" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>Id</th>
				<th>Elemento Virtual</th>
				<th>Observación</th>
				<th>Realizado Por</th>
				<th>Editar</th>
				<th>Eliminar</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th>Id</th>
				<th>Elemento Virtual</th>
				<th>Observación</th>
				<th>Realizado Por</th>
				<th>Editar</th>
				<th>Eliminar</th>
			</tr>
		</tfoot>
		<tbody>
			@foreach($oevirtuals as $oevirtual)
			<tr>
				<td>{{$oevirtual->id}}</td>
				<td>{{$oevirtual->evirtual->nombre}}</td>
				<td>{{$oevirtual->observaciones}}</td>
				<td>{{$oevirtual->reali_por}}</td>
				<td>
					{!!link_to_route('oevirtual.edit', $title = 'Editar', $parameters = $oevirtual -> id, $attributes = ['class'=>'btn btn-primary'])!!}
				</td>
				<td>
					{!!Form::open(['route' => ['oevirtual.destroy', $oevirtual -> id], 'method' => 'DELETE'])!!}
						{!!Form::submit('Eliminar', ['class'=>'btn btn-danger'])!!}
					{!!Form::close()!!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<hr>

	{!!link_to('/oevirtual/create', $title='Agregar Observación', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}

@stop

@section('scripts')
	{!!Html::script('js/table.js')!!}
@endsection
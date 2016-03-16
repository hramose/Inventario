@extends('layouts.principal')

@section('content')
	
	@include('alerts.success')

	<h3><i class="fa fa-angle-right"></i> BackUp's </h3>

	<hr>

	<table id="tabla" class="display" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>Id</th>
				<th>Elemento Virtual</th>
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
				<th>Elemento Virtual</th>
				<th>Fecha de BackUp</th>
				<th>Mecanismo</th>
				<th>Observación</th>
				<th>Editar</th>
				<th>Eliminar</th>
			</tr>
		</tfoot>			
		<tbody>
			@foreach($bevirtuals as $bevirtual)
			<tr>
				<td>{{$bevirtual->id}}</td>
				<td>{{$bevirtual->evirtual->nombre}}</td>
				<td>{{$bevirtual->fec_backup}}</td>
				<td>{{$bevirtual->mecanismo}}</td>
				<td>{{$bevirtual->observacion}}</td>
				<td>
					{!!link_to_route('bevirtual.edit', $title = 'Editar', $parameters = $bevirtual -> id, $attributes = ['class'=>'btn btn-primary'])!!}
				</td>
				<td>
					{!!Form::open(['route' => ['bevirtual.destroy', $bevirtual -> id], 'method' => 'DELETE'])!!}
						{!!Form::submit('Eliminar', ['class'=>'btn btn-danger'])!!}
					{!!Form::close()!!}
				</td>
			</tr>
			@endforeach
		</tbody>
		
	</table>

	<hr>
	
	{!!link_to('/bevirtual/create', $title='Agregar BackUp', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}

@stop

@section('scripts')
	{!!Html::script('js/table.js')!!}
@endsection
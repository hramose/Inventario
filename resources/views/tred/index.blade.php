@extends('layouts.principal')

@section('content')
	
	@include('alerts.success')

	<h3><i class="fa fa-angle-right"></i> Tipos de Redes </h3>

	<hr>

	<table id="tabla" class="display" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>Id</th>
				<th>Tipo de Red</th>
				<th>Eliminar</th>
				<th>Editar</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th>Id</th>
				<th>Tipo de Red</th>
				<th>Eliminar</th>
				<th>Editar</th>
			</tr>
		</tfoot>
		<tbody>
			@foreach($treds as $tred)
			<tr>
				<td>{{$tred->id}}</td>
				<td>{{$tred->tipo_red}}</td>
				<td>
					{!!link_to_route('tred.edit', $title = 'Editar', $parameters = $tred -> id, $attributes = ['class'=>'btn btn-primary'])!!}
				</td>
				<td>
					{!!Form::open(['route' => ['tred.destroy', $tred -> id], 'method' => 'DELETE'])!!}
						{!!Form::submit('Eliminar', ['class'=>'btn btn-danger'])!!}
					{!!Form::close()!!}
				</td>
			</tr>
			@endforeach
		</tbody>		
	</table>

	<hr>
		
	{!!link_to('/tred/create', $title='Agregar Tipo de Red', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}
	{!!link_to('/refisico', $title='Ver Redes de Elementos Físicos', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}
	{!!link_to('/revirtual', $title='Ver Redes de Elementos Virtuales', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}

@stop

@section('scripts')
	{!!Html::script('js/table.js')!!}
@endsection
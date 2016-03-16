@extends('layouts.principal')

@section('content')
	
	@include('alerts.success')

	<h3><i class="fa fa-angle-right"></i> Fabricantes </h3>

	<hr>

	<table id="tabla" class="display" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>Id</th>
				<th>Fabricante</th>
				<th>Editar</th>
				<th>Eliminar</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th>Id</th>
				<th>Fabricante</th>
				<th>Editar</th>
				<th>Eliminar</th>
			</tr>
		</tfoot>
		<tbody>
			@foreach($fefisicos as $fefisico)
			<tr>
				<td>{{$fefisico->id}}</td>
				<td>{{$fefisico->marca}}</td>
				<td>
					{!!link_to_route('fefisico.edit', $title = 'Editar', $parameters = $fefisico -> id, $attributes = ['class'=>'btn btn-primary'])!!}
				</td>
				<td>
					{!!Form::open(['route' => ['fefisico.destroy', $fefisico -> id], 'method' => 'DELETE'])!!}
						{!!Form::submit('Eliminar', ['class'=>'btn btn-danger'])!!}
					{!!Form::close()!!}
				</td>
			</tr>
			@endforeach
		</tbody>
		
	</table>
	
	<hr>
		
	{!!link_to('/fefisico/create', $title='Agregar Fabricante', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}
	{!!link_to('/tefisico', $title='Ver Tipos de Elemetos Físicos', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}

@stop

@section('scripts')
	{!!Html::script('js/table.js')!!}
@endsection
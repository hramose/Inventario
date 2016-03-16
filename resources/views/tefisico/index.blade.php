@extends('layouts.principal')

@section('content')

	@include('alerts.success')

	<h3><i class="fa fa-angle-right"></i> Tipos de Elementos Fisicos </h3>

	<hr>

	<table id="tabla" class="display" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>ID</th>
				<th>Fabricante</th>
				<th>Tipo</th>
				<th>Editar</th>
				<th>Eliminar</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th>ID</th>
				<th>Fabricante</th>
				<th>Tipo</th>
				<th>Editar</th>
				<th>Eliminar</th>
			</tr>
		</tfoot>
		<tbody>
			@foreach($tefisicos as $tefisico)
			<tr>
				<td>{{$tefisico->id}}</td>
				<td>{{$tefisico->fabricante->marca}}</td>
				<td>{{$tefisico->tipo}}</td>
				<td>
					{!!link_to_route('tefisico.edit', $title = 'Editar', $parameters = $tefisico -> id, $attributes = ['class'=>'btn btn-primary'])!!}
				</td>
				<td>
					{!!Form::open(['route' => ['tefisico.destroy', $tefisico -> id], 'method' => 'DELETE'])!!}
						{!!Form::submit('Eliminar', ['class'=>'btn btn-danger'])!!}
					{!!Form::close()!!}
				</td>
			</tr>
			@endforeach
		</tbody>		
	</table>

	<hr>
		
	{!!link_to('/tefisico/create', $title='Agregar Tipo de Elemento Físico', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}
	{!!link_to('/fefisico', $title='Gestionar Fabricantes', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}
	{!!link_to('/efisico', $title='Ver Elementos Físicos', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}

@stop

@section('scripts')
	{!!Html::script('js/table.js')!!}
@endsection
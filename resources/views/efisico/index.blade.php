@extends('layouts.principal')

@section('content')

	@include('alerts.success')

	<h3><i class="fa fa-angle-right"></i> Elementos Físicos </h3>

	<hr>

	<table id="tabla" class="display" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>Id</th>
				<th>Tipo</th>
				<th>Nombre</th>
				<th>Estado</th>
				<th>Editar</th>
				<th>Eliminar</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th>Id</th>
				<th>Tipo</th>
				<th>Nombre</th>
				<th>Estado</th>
				<th>Editar</th>
				<th>Eliminar</th>
			</tr>
		</tfoot>
		<tbody>
			@foreach($efisicos as $efisico)
			<tr>
				<td>{{$efisico->id}}</td>
				<td>{{$efisico->tefisico->tipo}}</td>
				<td>{{$efisico->nombre}}</td>
				<td>{{$efisico->estado}}</td>
				<td>
					{!!link_to_route('efisico.edit', $title = 'Editar', $parameters = $efisico -> id, $attributes = ['class'=>'btn btn-primary'])!!}
				</td>
				<td>
					{!!Form::open(['route' => ['efisico.destroy', $efisico -> id], 'method' => 'DELETE'])!!}
						{!!Form::submit('Eliminar', ['class'=>'btn btn-danger'])!!}
					{!!Form::close()!!}
				</td>
			</tr>
			@endforeach
		</tbody>
		
	</table>

	<hr>

	{!!link_to('/efisico/create', $title='Agregar Elemento Físico', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}
	{!!link_to('/tefisico', $title='Gestionar Tipos de Elementos Físicos', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}
	{!!link_to('/evirtual', $title='Ver Elementos Virtuales', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}

@stop

@section('scripts')
	{!!Html::script('js/table.js')!!}
@endsection
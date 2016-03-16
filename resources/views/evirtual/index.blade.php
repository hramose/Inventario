@extends('layouts.principal')

@section('content')
	
	@include('alerts.success')

	<h3><i class="fa fa-angle-right"></i> Elementos Virtuales </h3>

	<hr>

	<table id="tabla" class="display" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>Id</th>
				<th>Elemento Físico</th>
				<th>Hardware - Real</th>
				<th>Nombre</th>
				<th>Estado</th>
				<th>Editar</th>
				<th>Eliminar</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th>Id</th>
				<th>Elemento Físico</th>
				<th>Hardware - Real</th>
				<th>Nombre</th>
				<th>Estado</th>
				<th>Editar</th>
				<th>Eliminar</th>
			</tr>
		</tfoot>
		<tbody>
			@foreach($evirtuals as $evirtual)
			<tr>
				<td>{{$evirtual->id}}</td>
				<td>{{$evirtual->efisico->nombre}}</td>
				<td>{{$evirtual->tevirtual->nombre}}</td>
				<td>{{$evirtual->nombre}}</td>
				<td>{{$evirtual->estado}}</td>
				<td>
					{!!link_to_route('evirtual.edit', $title = 'Editar', $parameters = $evirtual -> id, $attributes = ['class'=>'btn btn-primary'])!!}
				</td>
				<td>
					{!!Form::open(['route' => ['evirtual.destroy', $evirtual -> id], 'method' => 'DELETE'])!!}
						{!!Form::submit('Eliminar', ['class'=>'btn btn-danger'])!!}
					{!!Form::close()!!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<hr>
		
	{!!link_to('/evirtual/create', $title='Agregar Elemento Virtual', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}
	{!!link_to('/tevirtual', $title='Gestionar Tipos de Elementos Virtuales', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}
	{!!link_to('/efisico', $title='Ver Elementos Físicos', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}

@stop

@section('scripts')
	{!!Html::script('js/table.js')!!}
@endsection
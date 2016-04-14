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
				<th>Nombre del Host</th>
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
				<th>Nombre del Host</th>
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
		
	{!!link_to('/evirtual/create', $title='Nuevo elemento virtual', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/tevirtual', $title='Tipos de elemento virtuales', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/devirtual', $title='Descripciones', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/revirtual', $title='Red', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/oevirtual', $title='Observaciones', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/bevirtual', $title='Backup´s', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}

	<hr>

@stop

@section('scripts')
	{!!Html::script('js/table.js')!!}
@endsection
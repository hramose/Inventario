@extends('layouts.principal')

@section('content')
	
	@include('alerts.success')
	
	<h3><i class="fa fa-angle-right"></i> Redes </h3>

	<hr>

	<table class="table">
		<thead>
			<th>Id</th>
			<th>Elemento Físico</th>
			<th>Elemento Virtual</th>
			<th>Tipo de Red</th>
			<th>Tipo de Conexión</th>
			<th>Ip</th>
			<th>Vlan</th>
			<th>Gateway</th>						
			<th>Editar</th>
			<th>Eliminar</th>
		</thead>
		@foreach($refisicos as $refisico)
		<tbody>
			<td>{{$refisico->id}}</td>
			<td>{{$refisico->efisico->nombre}}</td>
			<td></td>
			<td>{{$refisico->tred->tipo_red}}</td>
			<td>{{$refisico->eth}}</td>
			<td>{{$refisico->ip}}</td>
			<td>{{$refisico->vlan}}</td>
			<td>{{$refisico->gateway}}</td>
			<td>
				{!!link_to_route('refisico.edit', $title = 'Editar', $parameters = $refisico -> id, $attributes = ['class'=>'btn btn-primary'])!!}
			</td>
			<td>
				{!!Form::open(['route' => ['refisico.destroy', $refisico -> id], 'method' => 'DELETE'])!!}
					{!!Form::submit('Eliminar', ['class'=>'btn btn-danger'])!!}
				{!!Form::close()!!}
			</td>
		</tbody>
		@endforeach
		@foreach($revirtuals as $revirtual)
		<tbody>
			<td>{{$revirtual->id}}</td>
			<td>{{$revirtual->evirtual->nombre}}</td>
			<td>{{$revirtual->tred->tipo_red}}</td>
			<td>{{$revirtual->eth}}</td>
			<td>{{$revirtual->ip}}</td>
			<td>{{$revirtual->vlan}}</td>
			<td>{{$revirtual->gateway}}</td>
			<td>
				{!!link_to_route('revirtual.edit', $title = 'Editar', $parameters = $revirtual -> id, $attributes = ['class'=>'btn btn-primary'])!!}
			</td>
			<td>
				{!!Form::open(['route' => ['revirtual.destroy', $revirtual -> id], 'method' => 'DELETE'])!!}
					{!!Form::submit('Eliminar', ['class'=>'btn btn-danger'])!!}
				{!!Form::close()!!}
			</td>
		</tbody>
		@endforeach
	</table>

	{!!$refisicos -> render()!!}

	<hr>
	
	{!!link_to('/refisico/create', $title='Agregar Red', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}
	{!!link_to('/tred', $title='Gestionar Tipos de Redes', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}

@stop
@extends('layouts.principal')

@section('content')
	
	@include('alerts.success')
	
	<h3><i class="fa fa-angle-right"></i> Redes </h3>

	<hr>

	<table id="tabla" class="display" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>Id</th>
				<th>Nombre del Host</th>
				<th>Tipo de Red</th>
				<th>Tipo de Conexión</th>
				<th>Ip</th>
				<th>Vlan</th>
				<th>Gateway</th>						
				<th>Editar</th>
				<th>Eliminar</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th>Id</th>
				<th>Nombre del Host</th>
				<th>Tipo de Red</th>
				<th>Tipo de Conexión</th>
				<th>Ip</th>
				<th>Vlan</th>
				<th>Gateway</th>						
				<th>Editar</th>
				<th>Eliminar</th>
			</tr>
		</tfoot>
		<tbody>
			@foreach($refisicos as $refisico)
			<tr>
				<td>{{$refisico->id}}</td>
				<td>{{$refisico->efisico->nombre}}</td>
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
			</tr>
			@endforeach
		</tbody>		
	</table>

	<hr>
	
	{!!link_to('/refisico/create', $title='Nueva red', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/tred', $title='Tipos de redes', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/efisico', $title='Elementos físicos', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/defisico', $title='Descripciones', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/oefisico', $title='Observaciones', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/befisico', $title='Backup´s', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	
	<hr>

@stop

@section('scripts')
	{!!Html::script('js/table.js')!!}
@endsection
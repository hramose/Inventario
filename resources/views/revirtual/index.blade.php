@extends('layouts.principal')

@section('content')
	
	@include('alerts.success')
	
	<h3><i class="fa fa-angle-right"></i> Redes </h3>

	<hr>

	<table id="tabla" class="display" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>Id</th>
				<th>Elemento Virtual</th>
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
				<th>Elemento Virtual</th>
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
			@foreach($revirtuals as $revirtual)
			<tr>
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
			</tr>
			@endforeach
		</tbody>
	</table>

	<hr>
	
	{!!link_to('/revirtual/create', $title='Agregar Red', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}
	{!!link_to('/tred', $title='Gestionar Tipos de Redes', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}
	{!!link_to('/evirtual', $title='Ver Elementos Virtuales', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}

@stop

@section('scripts')
	{!!Html::script('js/table.js')!!}
@endsection
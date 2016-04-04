@extends('layouts.principal')

@section('content')

	@include('alerts.success')

	<h3><i class="fa fa-angle-right"></i> Descripciones </h3>

	<hr>

	<table id="tabla" class="display" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>Id</th>
				<th>Elemento Virtual</th>
				<th>Ubicación</th>
				<th>Health Status</th>
				<th>Sistema Operativo</th>
				<th>CPU</th>
				<th>HDD (Gb)</th>
				<th>Men (G)</th>
				<th>Act PWD 201310</th>
				<th>Gestión</th>
				<th>Licencia del S.O</th>
				<th>Licencia del Programa</th>
				<th>Editar</th>
				<th>Eliminar</th>
			</tr>			
		</thead>
		<tfoot>
			<tr>
				<th>Id</th>
				<th>Elemento Virtual</th>
				<th>Ubicación</th>
				<th>Health Status</th>
				<th>Sistema Operativo</th>
				<th>CPU</th>
				<th>HDD (Gb)</th>
				<th>Men (G)</th>
				<th>Act PWD 201310</th>
				<th>Gestión</th>
				<th>Licencia del S.O</th>
				<th>Licencia del Programa</th>
				<th>Editar</th>
				<th>Eliminar</th>
			</tr>			
		</tfoot>
		<tbody>
			@foreach($devirtuals as $devirtual)
			<tr>
				<td>{{$devirtual->id}}</td>
				<td>{{$devirtual->evirtual->nombre}}</td>
				<td>{{$devirtual->ubicacion}}</td>
				<td>{{$devirtual->h_status}}</td>
				<td>{{$devirtual->so}}</td>
				<td>{{$devirtual->cpu}}</td>
				<td>{{$devirtual->hd}}</td>
				<td>{{$devirtual->men}}</td>
				<td>{{$devirtual->act_pwd_201310}}</td>
				<td>{{$devirtual->gestion}}</td>
				<td>{{$devirtual->lic_so}}</td>
				<td>{{$devirtual->lic_programas}}</td>
				<td>
					{!!link_to_route('devirtual.edit', $title = 'Editar', $parameters = $devirtual -> id, $attributes = ['class'=>'btn btn-primary'])!!}
				</td>
				<td>
					{!!Form::open(['route' => ['devirtual.destroy', $devirtual -> id], 'method' => 'DELETE'])!!}
						{!!Form::submit('Eliminar', ['class'=>'btn btn-danger'])!!}
					{!!Form::close()!!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<hr>
		
	{!!link_to('/devirtual/create', $title='Agregar Descripción', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}

@stop

@section('scripts')
	{!!Html::script('js/table.js')!!}
@endsection
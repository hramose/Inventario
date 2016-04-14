@extends('layouts.principal')

@section('content')
	
	@include('alerts.success')

	<h3><i class="fa fa-angle-right"></i> Descripciones </h3>

	<hr>

	<table id="tabla" class="display" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>Id</th>
				<th>Nombre del Host</th>
				<th>Ubicación</th>
				<th>Health Status</th>
				<th>Sistema Operativo</th>
				<th>CPU</th>
				<th>HDD (Gb)</th>
				<th>Men (G)</th>
				<th>Act PWD 201310</th>
				<th>Gestión</th>			
				<th>Por Comprar</th>
				<th>Serial</th>
				<th>Fecha de Instalación</th>
				<th>Tiempo de Operación</th>
				<th>Soporte</th>
				<th>Inicio del Soporte</th>
				<th>Fin del Soporte</th>
				<th>Licencia del S.O</th>
				<th>Licencia del Programa</th>
				<th>Producto</th>
				<th>Contrato</th>
				<th>Editar</th>
				<th>Eliminar</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th>Id</th>
				<th>Nomnre del Host</th>
				<th>Ubicación</th>
				<th>Health Status</th>
				<th>Sistema Operativo</th>
				<th>CPU</th>
				<th>HDD (Gb)</th>
				<th>Men (G)</th>
				<th>Act PWD 201310</th>
				<th>Gestión</th>			
				<th>Por Comprar</th>
				<th>Serial</th>
				<th>Fecha de Instalación</th>
				<th>Tiempo de Operación</th>
				<th>Soporte</th>
				<th>Inicio del Soporte</th>
				<th>Fin del Soporte</th>
				<th>Licencia del S.O</th>
				<th>Licencia del Programa</th>
				<th>Producto</th>
				<th>Contrato</th>
				<th>Editar</th>
				<th>Eliminar</th>
			</tr>
		</tfoot>
		<tbody>
			@foreach($defisicos as $defisico)
			<tr>
				<td>{{$defisico->id}}</td>
				<td>{{$defisico->efisico->nombre}}</td>
				<td>{{$defisico->ubicacion}}</td>
				<td>{{$defisico->h_status}}</td>
				<td>{{$defisico->so}}</td>
				<td>{{$defisico->cpu}}</td>
				<td>{{$defisico->hd}}</td>
				<td>{{$defisico->men}}</td>
				<td>{{$defisico->act_pwd_201310}}</td>
				<td>{{$defisico->gestion}}</td>
				<td>{{$defisico->por_comprar}}</td>
				<td>{{$defisico->serial}}</td>
				<td>{{$defisico->fecha_instalacion}}</td>
				<td>{{$defisico->toperacion}}</td>
				<td>{{$defisico->soporte}}</td>
				<td>{{$defisico->ini_soporte}}</td>
				<td>{{$defisico->fin_soporte}}</td>
				<td>{{$defisico->lic_so}}</td>
				<td>{{$defisico->lic_programas}}</td>
				<td>{{$defisico->producto}}</td>
				<td>{{$defisico->contrato}}</td>
				<td>
					{!!link_to_route('defisico.edit', $title = 'Editar', $parameters = $defisico -> id, $attributes = ['class'=>'btn btn-primary'])!!}
				</td>
				<td>
					{!!Form::open(['route' => ['defisico.destroy', $defisico -> id], 'method' => 'DELETE'])!!}
						{!!Form::submit('Eliminar', ['class'=>'btn btn-danger'])!!}
					{!!Form::close()!!}
				</td>
			</tr>
			@endforeach
		</tbody>
		
	</table>

	<hr>

	{!!link_to('/defisico/create', $title='Nueva descripción', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/efisico', $title='Elementos físicos', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/refisico', $title='Red', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/oefisico', $title='Observaciones', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/befisico', $title='Backup´s', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}

	<hr>

@stop

@section('scripts')
	{!!Html::script('js/table.js')!!}
@endsection
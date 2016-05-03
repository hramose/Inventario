@extends('layouts.principal')

@section('content')
	
	<h3><i class="fa fa-angle-right"></i> Elementos Físicos </h3>

	<hr>

	<table id="tabla" class="display" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>Nombre del Host</th>
				<th>Hardware - Real</th>
				<th>Tipo</th>
				<th>Estado</th>
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
				<th>Observaciones</th>
				<th>Fecha BackUp</th>
				<th>Mecanismo</th>
				<th>Observaciones BackUp</th>
				<th>Licencia del S.O</th>
				<th>Licencia del Programa</th>
				<th>Producto</th>
				<th>Contrato</th>
			</tr>			
		</thead>
		<tfoot>
			<tr>
				<th>Nombre del Host</th>
				<th>Hardware - Real</th>
				<th>Tipo</th>
				<th>Estado</th>
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
				<th>Observaciones</th>
				<th>Fecha BackUp</th>
				<th>Mecanismo</th>
				<th>Observaciones BackUp</th>
				<th>Licencia del S.O</th>
				<th>Licencia del Programa</th>
				<th>Producto</th>
				<th>Contrato</th>
			</tr>			
		</tfoot>
		<tbody>
			@foreach($efisicos as $efisico)				
			<tr>
				<td>{{$efisico->nombre}}</td>				
				<td>{{$efisico->fabricante}}</td>
				<td>{{$efisico->tipo}}</td>
				<td>{{$efisico->estado}}</td>
				<td>{{$efisico->ubicacion}}</td>
				<td>{{$efisico->h_status}}</td>
				<td>{{$efisico->so}}</td>
				<td>{{$efisico->cpu}}</td>
				<td>{{$efisico->hd}}</td>
				<td>{{$efisico->men}}</td>
				<td>{{$efisico->act_pwd_201310}}</td>
				<td>{{$efisico->gestion}}</td>
				<td>{{$efisico->por_comprar}}</td>
				<td>{{$efisico->serial}}</td>
				<td>{{$efisico->fecha_instalacion}}</td>
				<td>{{$efisico->toperacion}}</td>
				<td>{{$efisico->soporte}}</td>
				<td>{{$efisico->ini_soporte}}</td>
				<td>{{$efisico->fin_soporte}}</td>
				<td>{{$efisico->observaciones}}</td>
				<td>{{$efisico->fec_backup}}</td>
				<td>{{$efisico->mecanismo}}</td>
				<td>{{$efisico->observacion}}</td>
				<td>{{$efisico->lic_so}}</td>
				<td>{{$efisico->lic_programas}}</td>
				<td>{{$efisico->producto}}</td>
				<td>{{$efisico->contrato}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<hr>

	{!!link_to('/efisico', $title='Elementos Físicos', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/defisico', $title='Descripciones', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/refisico', $title='Red', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/oefisico', $title='Observaciones', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/befisico', $title='Backup´s', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}

	<hr>
	
@stop

@section('scripts')
	{!!Html::script('js/table.js')!!}
@endsection
@extends('layouts.principal')

@section('content')
	
	<h3><i class="fa fa-angle-right"></i> Elementos Virtuales </h3>

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
				<th>Observaciones</th>
				<th>Fecha BackUp</th>
				<th>Mecanismo</th>
				<th>Observaciones BackUp</th>
				<th>Licencia del S.O</th>
				<th>Licencia del Programa</th>
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
				<th>Observaciones</th>
				<th>Fecha BackUp</th>
				<th>Mecanismo</th>
				<th>Observaciones BackUp</th>
				<th>Licencia del S.O</th>
				<th>Licencia del Programa</th>
			</tr>			
		</tfoot>
		<tbody>
			@foreach($evirtuals as $evirtual)				
			<tr>
				<td>{{$evirtual->nomevirtual}}</td>				
				<td>{{$evirtual->hardreal}}</td>
				<td>{{$evirtual->tipo}}</td>
				<td>{{$evirtual->estado}}</td>
				<td>{{$evirtual->ubicacion}}</td>
				<td>{{$evirtual->h_status}}</td>
				<td>{{$evirtual->so}}</td>
				<td>{{$evirtual->cpu}}</td>
				<td>{{$evirtual->hd}}</td>
				<td>{{$evirtual->men}}</td>
				<td>{{$evirtual->act_pwd_201310}}</td>
				<td>{{$evirtual->gestion}}</td>
				<td>{{$evirtual->observaciones}}</td>
				<td>{{$evirtual->fec_backup}}</td>
				<td>{{$evirtual->mecanismo}}</td>
				<td>{{$evirtual->observacion}}</td>
				<td>{{$evirtual->lic_so}}</td>
				<td>{{$evirtual->lic_programas}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<hr>

	{!!link_to('/efisico', $title='Elementos Virtuales', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/defisico', $title='Descripciones', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/refisico', $title='Red', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/oefisico', $title='Observaciones', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/befisico', $title='Backup´s', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}

	<hr>
	
@stop

@section('scripts')
	{!!Html::script('js/table.js')!!}
@endsection
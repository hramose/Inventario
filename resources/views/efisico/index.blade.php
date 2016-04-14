@extends('layouts.principal')

@section('content')

	@include('alerts.success')

	<h3><i class="fa fa-angle-right"></i> Elementos Físicos </h3>

	<hr>

	<table id="tabla" class="display" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>Id</th>
				<th>Nombre del Host</th>
				<th>Hardware - Real</th>
				<th>Tipo</th>
				<th>Estado</th>
				<th>Operaciones</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th>Id</th>
				<th>Nombre del Host</th>
				<th>Hardware - Real</th>
				<th>Tipo</th>
				<th>Estado</th>
				<th>Operaciones</th>
			</tr>
		</tfoot>
		<tbody>
			@foreach($efisicos as $efisico)
			<tr>
				<td>{{$efisico->id}}</td>
				<td>{{$efisico->nombre}}</td>
				<td>{{$efisico->tefisico->fabricante}}</td>
				<td>{{$efisico->tefisico->tipo}}</td>
				<td>{{$efisico->estado}}</td>
				<td>
					{!!Form::open(['route' => ['efisico.destroy', $efisico -> id], 'method' => 'DELETE'])!!}
						{!!link_to_route('efisico.edit', $title = 'Editar', $parameters = $efisico -> id, $attributes = ['class'=>'btn btn-primary'])!!}
						{!!Form::submit('Eliminar', ['class'=>'btn btn-danger'])!!}
					{!!Form::close()!!}
				</td>
			</tr>
			@endforeach
		</tbody>
		
	</table>

	<hr>

	{!!link_to('/efisico/create', $title='Nuevo elemento físico', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/tefisico', $title='Tipos de elementos físicos', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/defisico', $title='Descripciones', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/refisico', $title='Red', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/oefisico', $title='Observaciones', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/befisico', $title='Backup´s', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}

	<hr>

@stop

@section('scripts')
	{!!Html::script('js/table.js')!!}
@endsection
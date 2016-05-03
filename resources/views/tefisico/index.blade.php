@extends('layouts.principal')

@section('content')

	@include('alerts.success')

	<h3><i class="fa fa-angle-right"></i> Tipos de Elementos Fisicos </h3>

	<hr>

	<table id="tabla" class="display" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>ID</th>
				<th>Hardware - Real</th>
				<th>Tipo</th>
				<th>Operaciones</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th>ID</th>
				<th>Hardware - Real</th>
				<th>Tipo</th>
				<th>Operaciones</th>
			</tr>
		</tfoot>
		<tbody>
			@foreach($tefisicos as $tefisico)
			<tr>
				<td>{{$tefisico->id}}</td>
				<td>{{$tefisico->fabricante}}</td>
				<td>{{$tefisico->tipo}}</td>
				<td>
					{!!Form::open(['route' => ['tefisico.destroy', $tefisico -> id], 'method' => 'DELETE'])!!}
						{!!link_to_route('tefisico.edit', $title = 'Editar', $parameters = $tefisico -> id, $attributes = ['class'=>'btn btn-primary'])!!}
						{!!Form::submit('Eliminar', ['class'=>'btn btn-danger'])!!}
					{!!Form::close()!!}
				</td>
			</tr>
			@endforeach
		</tbody>		
	</table>

	<hr>
		
	{!!link_to('/tefisico/create', $title='Nuevo tipo de elemento físico', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/efisico', $title='Elementos físicos', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	
	<hr>

@stop

@section('scripts')
	{!!Html::script('js/table.js')!!}
@endsection
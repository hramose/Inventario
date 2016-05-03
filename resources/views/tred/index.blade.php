@extends('layouts.principal')

@section('content')
	
	@include('alerts.success')

	<h3><i class="fa fa-angle-right"></i> Tipos de Redes </h3>

	<hr>

	<table id="tabla" class="display" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>Id</th>
				<th>Tipo de Red</th>
				<th>Opciones</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th>Id</th>
				<th>Tipo de Red</th>
				<th>Opciones</th>
			</tr>
		</tfoot>
		<tbody>
			@foreach($treds as $tred)
			<tr>
				<td>{{$tred->id}}</td>
				<td>{{$tred->tipo_red}}</td>
				<td>
					{!!Form::open(['route' => ['tred.destroy', $tred -> id], 'method' => 'DELETE'])!!}
						{!!link_to_route('tred.edit', $title = 'Editar', $parameters = $tred -> id, $attributes = ['class'=>'btn btn-primary'])!!}
						{!!Form::submit('Eliminar', ['class'=>'btn btn-danger'])!!}
					{!!Form::close()!!}
				</td>
			</tr>
			@endforeach
		</tbody>		
	</table>

	<hr>
		
	{!!link_to('/tred/create', $title='Nuevo tipo de red', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/refisico', $title='Redes de elementos físicos', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/revirtual', $title='Redes de elementos virtuales', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	
	<hr>
	
@stop

@section('scripts')
	{!!Html::script('js/table.js')!!}
@endsection
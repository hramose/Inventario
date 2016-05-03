@extends('layouts.principal')

@section('content')
	
	@include('alerts.success')
	
	<h3><i class="fa fa-angle-right"></i> Tipo de Elemento Virtual </h3>

	<hr>

	<table id="tabla" class="display" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>Id</th>
				<th>Hardware - Real</th>
				<th>Opciones</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th>Id</th>
				<th>Hardware - Real</th>
				<th>Opciones</th>
			</tr>
		</tfoot>
		<tbody>
			@foreach($tevirtuals as $tevirtual)
			<tr>
				<td>{{$tevirtual->id}}</td>
				<td>{{$tevirtual->hardreal}}</td>
				<td>
					{!!Form::open(['route' => ['tevirtual.destroy', $tevirtual -> id], 'method' => 'DELETE'])!!}
						{!!link_to_route('tevirtual.edit', $title = 'Editar', $parameters = $tevirtual -> id, $attributes = ['class'=>'btn btn-primary'])!!}
						{!!Form::submit('Eliminar', ['class'=>'btn btn-danger'])!!}
					{!!Form::close()!!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<hr>
		
	{!!link_to('/tevirtual/create', $title='Nuevo tipo de elemeto Virtual', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/evirtual', $title='Elementos virtuales', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	
	<hr>

@stop

@section('scripts')
	{!!Html::script('js/table.js')!!}
@endsection
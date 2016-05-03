@extends('layouts.principal')

@section('content')

	@include('alerts.request')

	<hr>

	<h4><i class="fa fa-angle-right"></i> Editar Descripción </h4>

	<hr>

	<tr>
		<td>
			{!!Form::model($daplicacion, ['route' => ['daplicacion.update', $daplicacion -> id], 'method' => 'PUT'])!!}
				@include('daplicacion.form.daplicacion')
				{!!Form::submit('Editar', ['class'=>'btn btn-primary'])!!}
			{!!Form::close()!!}
		</td>
	</tr>

	<hr>

	{!!link_to('/daplicacion', $title='Descripciones', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/aplicacion', $title='Aplicaciones', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	
  	<hr>
	
@stop
@extends('layouts.principal')

@section('content')

	@include('alerts.request')

	{!!link_to('/daplicacion', $title='Ver Descripciones', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}

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
	
@stop
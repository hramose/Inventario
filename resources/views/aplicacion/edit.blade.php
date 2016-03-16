@extends('layouts.principal')

@section('content')

	@include('alerts.request')

	{!!link_to('/aplicacion', $title='Ver Aplicaciones', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}

    <hr>

	<h4><i class="fa fa-angle-right"></i> Editar Aplicación </h4>

	<hr>

	<tr>
		<td>
			{!!Form::model($aplicacion, ['route' => ['aplicacion.update', $aplicacion -> id], 'method' => 'PUT'])!!}
				@include('aplicacion.form.aplicacion')
				{!!Form::submit('Editar', ['class'=>'btn btn-primary'])!!}
			{!!Form::close()!!}
		</td>
	</tr>
	
@stop
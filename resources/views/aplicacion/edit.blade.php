@extends('layouts.principal')

@section('content')

	@include('alerts.request')

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

	<hr>

	{!!link_to('/aplicacion', $title='Aplicaciones', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/efisico', $title='Elemetos físicos', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/evirtual', $title='Elementos virtuales', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}

	<hr>
	
@stop
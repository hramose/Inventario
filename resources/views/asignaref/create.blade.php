@extends('layouts.principal')

@section('content')

	@include('alerts.request')

	<hr>

	<h4><i class="fa fa-angle-right"></i> Asignar Aplicación a Elemento Físico </h4>

	<hr>

	{!!Form::open(['route'=>'asignaref.store', 'method'=>'POST'])!!}
		@include('asignaref.form.asignaref')
		{!!Form::submit('Agregar', ['class'=>'btn btn-primary'])!!}
		{!!link_to('/efisico/create', $title='Si el elemento físico no se encuentra en la lista da clic aquí', $attributes = ['class' => 'btn btn-danger'], $secure = null)!!}
	{!!Form::close()!!}
	
	<hr>

	{!!link_to('/asignaref', $title='Asignaciones', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/aplicacion', $title='Aplicaciones', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/efisico', $title='Elementos físicos', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/aplicacion/create', $title='Si la aplicación no se encuentra en la lista da clic aquí', $attributes = ['class' => 'btn btn-danger'], $secure = null)!!}

	<hr>

@stop
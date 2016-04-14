@extends('layouts.principal')

@section('content')

	@include('alerts.request')

	<hr>

	<h4><i class="fa fa-angle-right"></i> Asignar Aplicación a Elemento Virtual </h4>

	<hr>

	{!!Form::open(['route'=>'asignarev.store', 'method'=>'POST'])!!}
		@include('asignarev.form.asignarev')
		{!!Form::submit('Agregar', ['class'=>'btn btn-primary'])!!}
		{!!link_to('/evirtual/create', $title='Si el elemento virtual no se encuentra en la lista da clic aquí', $attributes = ['class' => 'btn btn-danger'], $secure = null)!!}
	{!!Form::close()!!}

	<hr>

	{!!link_to('/asignarev', $title='Asignaciones', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/aplicacion', $title='Aplicaciones', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/evirtual', $title='Elementos virtuales', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/aplicacion/create', $title='Si la aplicación no se encuentra en la lista da clic aquí', $attributes = ['class' => 'btn btn-danger'], $secure = null)!!}

	<hr>

@stop
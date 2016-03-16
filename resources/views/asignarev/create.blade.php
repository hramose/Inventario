@extends('layouts.principal')

@section('content')

	@include('alerts.request')

	{!!link_to('/asignarev', $title='Ver Asignaciones', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}
	{!!link_to('/aplicacion', $title='Ver Aplicaciones', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}
	{!!link_to('/evirtual', $title='Ver Elementos Virtuales', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}

	<hr>

	<h4><i class="fa fa-angle-right"></i> Asignar Aplicación a Elemento Virtual </h4>

	<hr>

	{!!Form::open(['route'=>'asignarev.store', 'method'=>'POST'])!!}
		@include('asignarev.form.asignarev')
		{!!Form::submit('Agregar', ['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}

@stop
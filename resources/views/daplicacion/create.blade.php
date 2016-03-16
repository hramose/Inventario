@extends('layouts.principal')

@section('content')

	@include('alerts.request')

	{!!link_to('/daplicacion', $title='Ver Descripciones', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}
	{!!link_to('/aplicacion', $title='Ver Aplicaciones', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}
	{!!link_to('/aplicacion/create', $title='Agregar Aplicación', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}

  	<hr>

	<h4><i class="fa fa-angle-right"></i> Crear Descripción </h4>

	<hr>

	{!!Form::open(['route'=>'daplicacion.store', 'method'=>'POST'])!!}
		@include('daplicacion.form.daplicacion')
		{!!Form::submit('Agregar', ['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}

@stop
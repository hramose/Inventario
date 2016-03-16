@extends('layouts.principal')

@section('content')

	@include('alerts.request')

	{!!link_to('/aplicacion', $title='Ver Aplicaciones', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}
	{!!link_to('/efisico', $title='Ver Elemetos Físicos', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}
	{!!link_to('/evirtual', $title='Ver Elementos Virtuales', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}

	<hr>

	<h4><i class="fa fa-angle-right"></i> Crear Aplicación </h4>

	<hr>

	{!!Form::open(['route'=>'aplicacion.store', 'method'=>'POST'])!!}
		@include('aplicacion.form.aplicacion')
		{!!Form::submit('Agregar', ['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}

@stop
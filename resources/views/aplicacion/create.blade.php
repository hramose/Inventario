@extends('layouts.principal')

@section('content')

	@include('alerts.request')

	<h4><i class="fa fa-angle-right"></i> Crear Aplicación </h4>

	<hr>

	{!!Form::open(['route'=>'aplicacion.store', 'method'=>'POST'])!!}
		@include('aplicacion.form.aplicacion')
		{!!Form::submit('Agregar', ['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}

	<hr>

	{!!link_to('/aplicacion', $title='Aplicaciones', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/efisico', $title='Elemetos físicos', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/evirtual', $title='Elementos virtuales', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}

	<hr>

@stop
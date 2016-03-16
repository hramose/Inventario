@extends('layouts.principal')

@section('content')

	@include('alerts.request')

	{!!link_to('/asignaref', $title='Ver Asignaciones', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}
	{!!link_to('/aplicacion', $title='Ver Aplicaciones', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}
	{!!link_to('/efisico', $title='Ver Elementos Físicos', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}

	<hr>

	<h4><i class="fa fa-angle-right"></i> Asignar Aplicación a Elemento Físico </h4>

	<hr>

	{!!Form::open(['route'=>'asignaref.store', 'method'=>'POST'])!!}
		@include('asignaref.form.asignaref')
		{!!Form::submit('Agregar', ['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}

@stop
@extends('layouts.principal')

@section('content')

	@include('alerts.request')

	{!!link_to('/refisico', $title='Ver Redes', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}
	{!!link_to('/befisico', $title='Ver BackUp´s', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}
	{!!link_to('/efisico/create', $title='Agregar Elemento Físico', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}

	<hr>

	<h4><i class="fa fa-angle-right"></i> Crear Red </h4>

	<hr>

	{!!Form::open(['route'=>'refisico.store', 'method'=>'POST'])!!}
		@include('refisico.form.refisico')
		{!!Form::submit('Agregar', ['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}

@stop
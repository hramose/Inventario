@extends('layouts.principal')

@section('content')

	@include('alerts.request')

	{!!link_to('/defisico', $title='Ver Descripciones', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}
	{!!link_to('/efisico', $title='Ver Elementos Físicos', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}
	{!!link_to('/oefisico/create', $title='Agregar Observación', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}

	<hr>

	<h4><i class="fa fa-angle-right"></i> Crear Descripción </h4>

	<hr>

	{!!Form::open(['route'=>'defisico.store', 'method'=>'POST'])!!}
		@include('defisico.form.defisico')
		{!!Form::submit('Agregar', ['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}

@stop
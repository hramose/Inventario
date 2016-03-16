@extends('layouts.principal')

@section('content')

	@include('alerts.request')

	{!!link_to('/oefisico', $title='Ver Observaciones', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}
	{!!link_to('/defisico', $title='Ver descripciones', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}
	{!!link_to('/befisico/create', $title='Agregar BackUp', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}

	<hr>

	<h4><i class="fa fa-angle-right"></i> Crear Observación </h4>
	
	<hr>

	{!!Form::open(['route'=>'oefisico.store', 'method'=>'POST'])!!}
		@include('oefisico.form.oefisico')
		{!!Form::submit('Agregar', ['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}

@stop
@extends('layouts.principal')

@section('content')

	@include('alerts.request')

	{!!link_to('/devirtual', $title='Ver Descripciones', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}
	{!!link_to('/evirtual', $title='Ver Elementos Virtuales', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}
	{!!link_to('/oevirtual/create', $title='Agregar Observación', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}
	
	<hr>

	<h4><i class="fa fa-angle-right"></i> Crear Descripción </h4>

	<hr>

	{!!Form::open(['route'=>'devirtual.store', 'method'=>'POST'])!!}
		@include('devirtual.form.devirtual')
		{!!Form::submit('Agregar', ['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}

@stop
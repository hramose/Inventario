@extends('layouts.principal')

@section('content')

	@include('alerts.request')

	{!!link_to('/revirtual', $title='Ver Redes', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}
	{!!link_to('/bevirtual', $title='Ver BackUp´s', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}
	{!!link_to('/evirtual/create', $title='Agregar Elemento Virtual', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}

	<hr>

	<h4><i class="fa fa-angle-right"></i> Crear Red </h4>

	<hr>

	{!!Form::open(['route'=>'revirtual.store', 'method'=>'POST'])!!}
		@include('revirtual.form.revirtual')
		{!!Form::submit('Agregar', ['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}

@stop
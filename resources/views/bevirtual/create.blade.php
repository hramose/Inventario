@extends('layouts.principal')

@section('content')

	@include('alerts.request')

	{!!link_to('/bevirtual', $title='Ver Backup´s', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}
	{!!link_to('/oevirtual', $title='Ver Observaciones', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}
	{!!link_to('/revirtual/create', $title='Agregar Red', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}

	<hr>

	<h4><i class="fa fa-angle-right"></i> Crear BackUp </h4>

	<hr>

	{!!Form::open(['route'=>'bevirtual.store', 'method'=>'POST'])!!}
		@include('bevirtual.form.bevirtual')
		{!!Form::submit('Agregar', ['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}

@stop
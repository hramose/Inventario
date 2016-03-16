@extends('layouts.principal')

@section('content')

	@include('alerts.request')

	{!!link_to('/befisico', $title='Ver Backup´s', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}
	{!!link_to('/oefisico', $title='Ver Observaciones', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}
	{!!link_to('/refisico/create', $title='Agregar Red', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}

	<hr>

	<h4><i class="fa fa-angle-right"></i> Crear BackUp </h4>

	<hr>

	{!!Form::open(['route'=>'befisico.store', 'method'=>'POST'])!!}
		@include('befisico.form.befisico')
		{!!Form::submit('Agregar', ['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}

@stop
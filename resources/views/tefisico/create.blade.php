@extends('layouts.principal')

@section('content')

	@include('alerts.request')

	{!!link_to('/tefisico', $title='Ver Tipos', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}
	{!!link_to('/fefisico', $title='Ver Fabricantes', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}
	{!!link_to('/fefisico/create', $title='Agregar Fabricante', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}
	
	<hr>

	<h4><i class="fa fa-angle-right"></i> Crear Tipo de Elemento Físico </h4>

	<hr>

	{!!Form::open(['route'=>'tefisico.store', 'method'=>'POST'])!!}
		@include('tefisico.form.tefisico')
		{!!Form::submit('Agregar', ['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}

@stop
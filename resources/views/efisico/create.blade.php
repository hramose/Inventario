@extends('layouts.principal')

@section('content')

	@include('alerts.request')

	{!!link_to('/efisico', $title='Ver Elementos Físicos', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}
	{!!link_to('/tefisico', $title='Ver Tipos de Elementos Físicos', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}
	{!!link_to('/tefisico/create', $title='Agregar Tipo de Elemento Físico', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}

	<hr>

	<h4><i class="fa fa-angle-right"></i> Crear Elemento Físico </h4>

	<hr>

	{!!Form::open(['route'=>'efisico.store', 'method'=>'POST'])!!}
		@include('efisico.form.efisico')
		{!!Form::submit('Agregar', ['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}

@stop
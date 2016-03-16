@extends('layouts.principal')

@section('content')

	@include('alerts.request')

	{!!link_to('/evirtual', $title='Ver Elementos Virtuales', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}
	{!!link_to('/tevirtual', $title='Ver Tipos de Elementos Virtuales', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}
	{!!link_to('/tevirtual/create', $title='Agregar Tipo de Elemento Virtual', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}
	
	<hr>

	<h4><i class="fa fa-angle-right"></i> Crear Elemento Virtual </h4>

	<hr>

	{!!Form::open(['route'=>'evirtual.store', 'method'=>'POST'])!!}
		@include('evirtual.form.evirtual')
		{!!Form::submit('Agregar', ['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}

@stop
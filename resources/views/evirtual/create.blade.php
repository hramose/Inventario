@extends('layouts.principal')

@section('content')

	@include('alerts.request')

	<hr>

	<h4><i class="fa fa-angle-right"></i> Crear Elemento Virtual </h4>

	<hr>

	{!!Form::open(['route'=>'evirtual.store', 'method'=>'POST'])!!}
		@include('evirtual.form.evirtual')
		{!!Form::submit('Agregar', ['class'=>'btn btn-primary'])!!}
		{!!link_to('/tevirtual/create', $title='Si el hardware - real del elemento virtual no se encuentra en la lista da clic aquí', $attributes = ['class' => 'btn btn-danger'], $secure = null)!!}
	{!!Form::close()!!}

	<hr>

	{!!link_to('/evirtual', $title='Elementos Virtuales', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/tevirtual', $title='Tipos de Elementos Virtuales', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/efisico/create', $title='Si elelemento fisico no se encuentra en la lista da clic aquí', $attributes = ['class' => 'btn btn-danger'], $secure = null)!!}
	
	<hr>

@stop
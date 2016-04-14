@extends('layouts.principal')

@section('content')

	@include('alerts.request')

	<hr>

	<h4><i class="fa fa-angle-right"></i> Crear Red </h4>

	<hr>

	{!!Form::open(['route'=>'revirtual.store', 'method'=>'POST'])!!}
		@include('revirtual.form.revirtual')
		{!!Form::submit('Agregar', ['class'=>'btn btn-primary'])!!}
		{!!link_to('/evirtual/create', $title='Si el elemento virtual no se encuentra en la lista o desea agregar uno nuevo da clic aquí', $attributes = ['class' => 'btn btn-danger'], $secure = null)!!}
	{!!Form::close()!!}

	<hr>
	
	{!!link_to('/revirtual', $title='Redes', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/evirtual', $title='Elementos virtuales', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	
	<hr>

@stop
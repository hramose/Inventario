@extends('layouts.principal')

@section('content')

	@include('alerts.request')

	<hr>

	<h4><i class="fa fa-angle-right"></i> Crear BackUp </h4>

	<hr>

	{!!Form::open(['route'=>'bevirtual.store', 'method'=>'POST'])!!}
		@include('bevirtual.form.bevirtual')
		{!!Form::submit('Agregar', ['class'=>'btn btn-primary'])!!}
		{!!link_to('/evirtual/create', $title='Si el elemento virtual no se encuentra en la lista da clic aquí', $attributes = ['class' => 'btn btn-danger'], $secure = null)!!}
	{!!Form::close()!!}

	<hr>

	{!!link_to('/bevirtual', $title='Backup´s', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/evirtual', $title='Elementos virtuales', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	
	<hr>

@stop
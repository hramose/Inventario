@extends('layouts.principal')

@section('content')

	@include('alerts.request')

	<hr>

	<h4><i class="fa fa-angle-right"></i> Crear Tipo de Red </h4>

	<hr>

	{!!Form::open(['route'=>'tred.store', 'method'=>'POST'])!!}
		@include('tred.form.tred')
		{!!Form::submit('Agregar', ['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
	
	<hr>
	
	{!!link_to('/tred', $title='Tipos de Redes', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/refisico', $title='Redes de elementos físicos', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/revirtual', $title='Redes de elementos virtuales', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}

	<hr>

@stop
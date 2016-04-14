@extends('layouts.principal')

@section('content')

	@include('alerts.request')

	<hr>

	<h4><i class="fa fa-angle-right"></i> Crear Red </h4>

	<hr>

	{!!Form::open(['route'=>'refisico.store', 'method'=>'POST'])!!}
		@include('refisico.form.refisico')
		{!!Form::submit('Agregar', ['class'=>'btn btn-primary'])!!}
		{!!link_to('/efisico/create', $title='Si el elemento físico no se encuentra en la lista o desea agregar uno nuevo da clic aquí', $attributes = ['class' => 'btn btn-danger'], $secure = null)!!}
	{!!Form::close()!!}

	<hr>
	
	{!!link_to('/refisico', $title='Redes', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/efisico', $title='Elementos físicos', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	
	<hr>

@stop
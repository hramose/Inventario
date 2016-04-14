@extends('layouts.principal')

@section('content')

	@include('alerts.request')

	<hr>

	<h4><i class="fa fa-angle-right"></i> Crear Historial de Mantenimiento </h4>
  
	<hr>

	{!!Form::open(['route'=>'hefisico.store', 'method'=>'POST'])!!}
		@include('hefisico.form.hefisico')
		{!!Form::submit('Agregar', ['class'=>'btn btn-primary'])!!}
		{!!link_to('/efisico/create', $title='Si el elemento físico no se encuentra en la lista da clic aquí', $attributes = ['class' => 'btn btn-danger'], $secure = null)!!}
	{!!Form::close()!!}

	<hr>

	{!!link_to('/hefisico', $title='Historiales', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/hefisico', $title='Elementos Físicos', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}

	<hr>

@stop
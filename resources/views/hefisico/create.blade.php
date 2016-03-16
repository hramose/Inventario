@extends('layouts.principal')

@section('content')

	@include('alerts.request')

	{!!link_to('/hefisico', $title='Ver Historiales', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}

	<hr>

	<h4><i class="fa fa-angle-right"></i> Crear Historial de Mantenimiento </h4>
  
	<hr>

	{!!Form::open(['route'=>'hefisico.store', 'method'=>'POST'])!!}
		@include('hefisico.form.hefisico')
		{!!Form::submit('Agregar', ['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}

@stop
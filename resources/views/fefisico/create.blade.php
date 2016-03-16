@extends('layouts.principal')

@section('content')

	@include('alerts.request')

	{!!link_to('/fefisico', $title='Ver Fabricantes', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}
	
	<hr>

	<h4><i class="fa fa-angle-right"></i> Crear Fabricante </h4>
	
	<hr>

	{!!Form::open(['route'=>'fefisico.store', 'method'=>'POST'])!!}
		@include('fefisico.form.fefisico')
		{!!Form::submit('Agregar', ['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}

@stop
@extends('layouts.admin')

@section('content')

	@include('alerts.request')

	<hr>

	<h4><i class="fa fa-angle-right"></i> Crear Usuario </h4>

	<hr>

	{!!Form::open(['route'=>'usuario.store', 'method'=>'POST'])!!}
		@include('usuario.forms.usr')
		{!!Form::submit('Registrar', ['class'=>'btn btn-primary'])!!}
		{!!link_to('/usuario', $title='Ver Usuarios', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!Form::close()!!}

@stop
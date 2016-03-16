@extends('layouts.principal')

@section('content')

	@include('alerts.request')

	{!!link_to('/tred', $title='Ver Tipos de Redes', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}

	<hr>

	{!!Form::open(['route'=>'tred.store', 'method'=>'POST'])!!}
		@include('tred.form.tred')
		{!!Form::submit('Agregar', ['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}

@stop
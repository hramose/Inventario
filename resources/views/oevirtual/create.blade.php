@extends('layouts.principal')

@section('content')

	@include('alerts.request')

	{!!link_to('/oevirtual', $title='Ver Observaciones', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}
	{!!link_to('/devirtual', $title='Ver descripciones', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}
	{!!link_to('/bevirtual/create', $title='Agregar BackUp', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}

	<hr>

	<h4><i class="fa fa-angle-right"></i> Crear Observación </h4>
	
	<hr>

	{!!Form::open(['route'=>'oevirtual.store', 'method'=>'POST'])!!}
		@include('oevirtual.form.oevirtual')
		{!!Form::submit('Agregar', ['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}

@stop
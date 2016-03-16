@extends('layouts.principal')

@section('content')

	@include('alerts.request')

	{!!link_to('/tevirtual', $title='Ver Tipos de Elementos Virtuales', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}

	<hr>

  	<h4><i class="fa fa-angle-right"></i> Crear Tipo de Elemento Virtual </h4>
	
	<hr>

	{!!Form::open(['route'=>'tevirtual.store', 'method'=>'POST'])!!}
		@include('tevirtual.form.tevirtual')
		{!!Form::submit('Agregar', ['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}

@stop
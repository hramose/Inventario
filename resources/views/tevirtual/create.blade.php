@extends('layouts.principal')

@section('content')

	@include('alerts.request')

	<hr>

  	<h4><i class="fa fa-angle-right"></i> Crear Tipo de Elemento Virtual </h4>
	
	<hr>

	{!!Form::open(['route'=>'tevirtual.store', 'method'=>'POST'])!!}
		@include('tevirtual.form.tevirtual')
		{!!Form::submit('Agregar', ['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}

	<hr>

	{!!link_to('/tevirtual', $title='Tipos de Elementos Virtuales', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/evirtual', $title='Elementos Virtuales', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}

	<hr>

@stop
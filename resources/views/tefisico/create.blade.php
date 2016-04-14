@extends('layouts.principal')

@section('content')

	@include('alerts.request')
	
	<hr>

	<h4><i class="fa fa-angle-right"></i> Crear Tipo de Elemento Físico </h4>

	<hr>

	{!!Form::open(['route'=>'tefisico.store', 'method'=>'POST'])!!}
		@include('tefisico.form.tefisico')
		{!!Form::submit('Agregar', ['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}

	<hr>
	
	{!!link_to('/tefisico', $title='Tipos de elemetos físicos', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/efisico', $title='Elementos físicos', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	
	<hr>

@stop
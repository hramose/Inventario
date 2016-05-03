@extends('layouts.principal')

@section('content')

	@include('alerts.request')

	<hr>

	<h4><i class="fa fa-angle-right"></i> Crear Elemento Físico </h4>

	<hr>

	{!!Form::open(['route'=>'efisico.store', 'method'=>'POST'])!!}
		@include('efisico.form.efisico')
		{!!Form::submit('Agregar', ['class'=>'btn btn-primary'])!!}
		{!!link_to('/tefisico/create', $title='Si el hardware - real del elemento físico no se encuentra en la lista da clic aquí', $attributes = ['class' => 'btn btn-danger'], $secure = null)!!}
	{!!Form::close()!!}

	<hr>
	
	{!!link_to('/efisico', $title='Elementos físicos', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	{!!link_to('/tefisico', $title='Tipos de elementos físicos', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
	
	<hr>

@stop
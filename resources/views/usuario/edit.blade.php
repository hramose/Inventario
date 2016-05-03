@extends('layouts.admin')

@section('content')

	@include('alerts.request')

	<hr>

	<h4><i class="fa fa-angle-right"></i> Editar Usuario </h4>

	<hr>
	
	<tr>
		<td>
			{!!Form::model($user, ['route' => ['usuario.update', $user -> id], 'method' => 'PUT'])!!}
				@include('usuario.forms.usr')
				{!!Form::submit('Editar', ['class'=>'btn btn-primary'])!!}
				{!!link_to('/usuario', $title='Ver Usuarios', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
			{!!Form::close()!!}
		</td>
	</tr>
	
@stop
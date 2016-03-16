@extends('layouts.admin')

@section('content')

	@include('alerts.request')

	<hr>

	{!!link_to('/usuario', $title='Ver Usuarios', $attributes = ['class' => 'btn btn-primary'], $secure = null)!!}

  	<hr>

	<tr>
		<td>
			{!!Form::model($user, ['route' => ['usuario.update', $user -> id], 'method' => 'PUT'])!!}
				@include('usuario.forms.usr')
				{!!Form::submit('Editar', ['class'=>'btn btn-primary'])!!}
			{!!Form::close()!!}
		</td>
	</tr>
	
@stop
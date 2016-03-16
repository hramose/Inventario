@extends('layouts.principal')

@section('content')

  @include('alerts.request')

  {!!link_to('/asignarev', $title='Ver Asignaciones', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}

  <hr>

  <h4><i class="fa fa-angle-right"></i> Editar Asignación </h4>

  <hr>
  	
  <tr>
    <td>
      {!!Form::model($asignarev, ['route' => ['asignarev.update', $asignarev -> id], 'method' => 'PUT'])!!}
        @include('asignarev.form.asignarev')
        {!!Form::submit('Editar', ['class'=>'btn btn-primary'])!!}
      {!!Form::close()!!}
    </td>
  </tr>
  
@stop
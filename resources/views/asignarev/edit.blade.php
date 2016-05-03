@extends('layouts.principal')

@section('content')

  @include('alerts.request')

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
  
  <hr>

  {!!link_to('/asignarev', $title='Asignaciones', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
  {!!link_to('/aplicacion', $title='Aplicaciones', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
  {!!link_to('/evirtual', $title='Elementos virtuales', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
  
  <hr>

@stop
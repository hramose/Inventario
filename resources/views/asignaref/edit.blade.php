@extends('layouts.principal')

@section('content')

  @include('alerts.request')

  <hr>

  <h4><i class="fa fa-angle-right"></i> Editar Asignación </h4>

  <hr>
  
  <tr>
    <td>
      {!!Form::model($asignaref, ['route' => ['asignaref.update', $asignaref -> id], 'method' => 'PUT'])!!}
        @include('asignaref.form.asignaref')
        {!!Form::submit('Editar', ['class'=>'btn btn-primary'])!!}
      {!!Form::close()!!}
    </td>
  </tr>

  <hr>

  {!!link_to('/asignaref', $title='Asignaciones', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
  {!!link_to('/aplicacion', $title='Aplicaciones', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
  {!!link_to('/efisico', $title='Elementos físicos', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
  
  <hr>
  
@stop
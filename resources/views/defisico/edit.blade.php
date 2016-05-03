@extends('layouts.principal')

@section('content')

  @include('alerts.request')

  <hr>

  <h4><i class="fa fa-angle-right"></i> Editar Descripción </h4>
  
  <hr>

  <tr>
    <td>
      {!!Form::model($defisico, ['route' => ['defisico.update', $defisico -> id], 'method' => 'PUT'])!!}
        @include('defisico.form.defisico')
        {!!Form::submit('Editar', ['class'=>'btn btn-primary'])!!}
      {!!Form::close()!!}
    </td>
  </tr>

  <hr>
  
  {!!link_to('/defisico', $title='Descripciones', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
  {!!link_to('/efisico', $title='Elementos físicos', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}

  <hr>
  
@stop
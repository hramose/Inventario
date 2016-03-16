@extends('layouts.principal')

@section('content')

  @include('alerts.request')

  {!!link_to('/defisico', $title='Ver Descripciones', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}

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
  
@stop
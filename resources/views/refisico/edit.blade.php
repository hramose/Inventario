@extends('layouts.principal')

@section('content')

  @include('alerts.request')

  <hr>

  <h4><i class="fa fa-angle-right"></i> Editar Red </h4>
  
  <hr>

  <tr>
    <td>
      {!!Form::model($refisico, ['route' => ['refisico.update', $refisico -> id], 'method' => 'PUT'])!!}
        @include('refisico.form.refisico')
        {!!Form::submit('Editar', ['class'=>'btn btn-primary'])!!}
      {!!Form::close()!!}
    </td>
  </tr>

  <hr>

  {!!link_to('/refisico', $title='Redes', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
  {!!link_to('/efisico', $title='Elementos físicos', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
  
  <hr>
  
@stop
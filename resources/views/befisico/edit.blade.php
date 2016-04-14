@extends('layouts.principal')

@section('content')

  @include('alerts.request')

  <hr>

  <h4><i class="fa fa-angle-right"></i> Editar BackUp </h4>
  
  <hr>

  <tr>
    <td>
      {!!Form::model($befisico, ['route' => ['befisico.update', $befisico -> id], 'method' => 'PUT'])!!}
        @include('befisico.form.befisico')
        {!!Form::submit('Editar', ['class'=>'btn btn-primary'])!!}
      {!!Form::close()!!}
    </td>
  </tr>

  <hr>

  {!!link_to('/befisico', $title='Backup´s', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
  {!!link_to('/efisico', $title='Elementos físicos', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
  
  <hr>
  
@stop
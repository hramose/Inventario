@extends('layouts.principal')

@section('content')

  @include('alerts.request')

  {!!link_to('/befisico', $title='Ver BackUp´s', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}

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
  
@stop
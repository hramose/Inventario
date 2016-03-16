@extends('layouts.principal')

@section('content')

  @include('alerts.request')

  {!!link_to('/refisico', $title='Ver Redes', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}

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
  
@stop
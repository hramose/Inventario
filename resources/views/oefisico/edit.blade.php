@extends('layouts.principal')

@section('content')

  @include('alerts.request')

  {!!link_to('/oefisico', $title='Ver Observaciones', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}

  <hr>

  <h4><i class="fa fa-angle-right"></i> Editar Observación </h4>
  
  <hr>

  <tr>
    <td>
      {!!Form::model($oefisico, ['route' => ['oefisico.update', $oefisico -> id], 'method' => 'PUT'])!!}
        @include('oefisico.form.oefisico')
        {!!Form::submit('Editar', ['class'=>'btn btn-primary'])!!}
      {!!Form::close()!!}
    </td>
  </tr>
  
@stop
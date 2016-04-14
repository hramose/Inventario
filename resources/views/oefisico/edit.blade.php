@extends('layouts.principal')

@section('content')

  @include('alerts.request')

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

  <hr>

  {!!link_to('/oefisico', $title='Observaciones', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
  {!!link_to('/efisico', $title='Elementos físicos', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}

  <hr>
  
@stop
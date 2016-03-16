@extends('layouts.principal')

@section('content')

  @include('alerts.request')

  {!!link_to('/hefisico', $title='Ver Historiales', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}
  
  <hr>

  <h4><i class="fa fa-angle-right"></i> Editar Historial de Mantenimiento </h4>
  
  <hr>

  <tr>
    <td>
      {!!Form::model($hefisico, ['route' => ['hefisico.update', $hefisico -> id], 'method' => 'PUT'])!!}
        @include('hefisico.form.hefisico')
        {!!Form::submit('Editar', ['class'=>'btn btn-primary'])!!}
      {!!Form::close()!!}
    </td>
  </tr>
  
@stop
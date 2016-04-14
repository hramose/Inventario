@extends('layouts.principal')

@section('content')

  @include('alerts.request')

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

  <hr>

  {!!link_to('/hefisico', $title='Historiales', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
  {!!link_to('/hefisico', $title='Elementos Físicos', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}

  <hr>
  
@stop
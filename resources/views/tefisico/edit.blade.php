@extends('layouts.principal')

@section('content')

  @include('alerts.request')

  {!!link_to('/tefisico', $title='Ver Tipos', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}
  
  <hr>

  <h4><i class="fa fa-angle-right"></i> Editar Tipo de Elemento Físico </h4>
  
  <hr>

  <tr>
    <td>
      {!!Form::model($tefisico, ['route' => ['tefisico.update', $tefisico -> id], 'method' => 'PUT'])!!}
        @include('tefisico.form.tefisico')
        {!!Form::submit('Editar', ['class'=>'btn btn-primary'])!!}
      {!!Form::close()!!}
    </td>
  </tr>
  
@stop
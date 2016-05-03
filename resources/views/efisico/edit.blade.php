@extends('layouts.principal')

@section('content')

  @include('alerts.request')

  <hr>

  <h4><i class="fa fa-angle-right"></i> Editar Elemento Físico </h4>
  
  <hr>

  <tr>
    <td>
      {!!Form::model($efisico, ['route' => ['efisico.update', $efisico -> id], 'method' => 'PUT'])!!}
        @include('efisico.form.efisico')
        {!!Form::submit('Editar', ['class'=>'btn btn-primary'])!!}
      {!!Form::close()!!}
    </td>
  </tr>

  <hr>
  
  {!!link_to('/efisico', $title='Elementos físicos', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
  {!!link_to('/tefisico', $title='Tipos de elementos físicos', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
  
  <hr>
  
@stop
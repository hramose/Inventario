@extends('layouts.principal')

@section('content')

  @include('alerts.request')

  {!!link_to('/efisico', $title='Ver Elemetos Físicos', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}

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
  
@stop
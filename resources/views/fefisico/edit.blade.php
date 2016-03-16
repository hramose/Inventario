@extends('layouts.principal')

@section('content')

  @include('alerts.request')

  {!!link_to('/fefisico', $title='Ver Fabricantes', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}

  <hr>

  <h4><i class="fa fa-angle-right"></i> Editar Fabricante </h4>

  <hr>

  <tr>
    <td>
      {!!Form::model($fefisico, ['route' => ['fefisico.update', $fefisico -> id], 'method' => 'PUT'])!!}
        @include('fefisico.form.fefisico')
        {!!Form::submit('Editar', ['class'=>'btn btn-primary'])!!}
      {!!Form::close()!!}
    </td>
  </tr>
  
@stop
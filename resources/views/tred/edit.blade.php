@extends('layouts.principal')

@section('content')

  @include('alerts.request')

  <hr>

  <h4><i class="fa fa-angle-right"></i> Editar Tipo de Red </h4>

  <hr>

  <tr>
    <td>
      {!!Form::model($tred, ['route' => ['tred.update', $tred -> id], 'method' => 'PUT'])!!}
        @include('tred.form.tred')
        {!!Form::submit('Editar', ['class'=>'btn btn-primary'])!!}
      {!!Form::close()!!}
    </td>
  </tr>

  <hr>

  {!!link_to('/tred', $title='Tipos de Redes', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
  {!!link_to('/refisico', $title='Redes de elementos físicos', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
  {!!link_to('/revirtual', $title='Redes de elementos virtuales', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}

  <hr>
  
@stop
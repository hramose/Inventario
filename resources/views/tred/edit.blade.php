@extends('layouts.principal')

@section('content')

  @include('alerts.request')

  {!!link_to('/tred', $title='Ver Tipos de Redes', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}

  <hr>

  <tr>
    <td>
      {!!Form::model($tred, ['route' => ['tred.update', $tred -> id], 'method' => 'PUT'])!!}
        @include('tred.form.tred')
        {!!Form::submit('Editar', ['class'=>'btn btn-primary'])!!}
      {!!Form::close()!!}
    </td>
  </tr>
  
@stop
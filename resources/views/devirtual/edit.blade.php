@extends('layouts.principal')

@section('content')

  @include('alerts.request')

  {!!link_to('/devirtual', $title='Ver Descripciones', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}

  <hr>

  <h4><i class="fa fa-angle-right"></i> Editar Descripción </h4>
  
  <hr>

  <tr>
    <td>
      {!!Form::model($devirtual, ['route' => ['devirtual.update', $devirtual -> id], 'method' => 'PUT'])!!}
        @include('devirtual.form.devirtual')
        {!!Form::submit('Editar', ['class'=>'btn btn-primary'])!!}
      {!!Form::close()!!}
    </td>
  </tr>
  
@stop
@extends('layouts.principal')

@section('content')

  @include('alerts.request')

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
  
  <hr>
  
  {!!link_to('/devirtual', $title='Descripciones', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
  {!!link_to('/evirtual', $title='Elementos virtuales', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}

  <hr>

@stop
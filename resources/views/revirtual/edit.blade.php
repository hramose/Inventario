@extends('layouts.principal')

@section('content')

  @include('alerts.request')

  <hr>

  <h4><i class="fa fa-angle-right"></i> Editar Red </h4>
  
  <hr>

  <tr>
    <td>
      {!!Form::model($revirtual, ['route' => ['revirtual.update', $revirtual -> id], 'method' => 'PUT'])!!}
        @include('revirtual.form.revirtual')
        {!!Form::submit('Editar', ['class'=>'btn btn-primary'])!!}
      {!!Form::close()!!}
    </td>
  </tr>

  <hr>
  
  {!!link_to('/revirtual', $title='Redes', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
  {!!link_to('/evirtual', $title='Elementos virtuales', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
  
  <hr>
  
@stop
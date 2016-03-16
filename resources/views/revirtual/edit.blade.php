@extends('layouts.principal')

@section('content')

  @include('alerts.request')

  {!!link_to('/revirtual', $title='Ver Redes', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}
  
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
  
@stop
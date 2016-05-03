@extends('layouts.principal')

@section('content')

  @include('alerts.request')

  <hr>

  <h4><i class="fa fa-angle-right"></i> Editar BackUp </h4>
  
  <hr>

  <tr>
    <td>
      {!!Form::model($bevirtual, ['route' => ['bevirtual.update', $bevirtual -> id], 'method' => 'PUT'])!!}
        @include('bevirtual.form.bevirtual')
        {!!Form::submit('Editar', ['class'=>'btn btn-primary'])!!}
      {!!Form::close()!!}
    </td>
  </tr>

  <hr>

  {!!link_to('/bevirtual', $title='Backup´s', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
  {!!link_to('/evirtual', $title='Elementos virtuales', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
  
  <hr>
  
@stop
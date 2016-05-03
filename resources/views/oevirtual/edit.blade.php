@extends('layouts.principal')

@section('content')

  @include('alerts.request')

  <hr>

  <h4><i class="fa fa-angle-right"></i> Editar Observación </h4>
  
  <hr>

  <tr>
    <td>
      {!!Form::model($oevirtual, ['route' => ['oevirtual.update', $oevirtual -> id], 'method' => 'PUT'])!!}
        @include('oevirtual.form.oevirtual')
        {!!Form::submit('Editar', ['class'=>'btn btn-primary'])!!}
      {!!Form::close()!!}
    </td>
  </tr>

  <hr>

  {!!link_to('/oevirtual', $title='Observaciones', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
  {!!link_to('/evirtual', $title='Elementos virtuales', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}

  <hr>
  
@stop
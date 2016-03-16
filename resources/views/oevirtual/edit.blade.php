@extends('layouts.principal')

@section('content')

  @include('alerts.request')

  {!!link_to('/oevirtual', $title='Ver Observaciones', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}

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
  
@stop
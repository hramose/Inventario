@extends('layouts.principal')

@section('content')

  @include('alerts.request')

  {!!link_to('/tevirtual', $title='Ver Tipos de Elemetos Virtuales', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}
  
  <hr>

  <h4><i class="fa fa-angle-right"></i> Editar Tipo de Elemento Virtual </h4>

  <hr>

  <tr>
    <td>
      {!!Form::model($tevirtual, ['route' => ['tevirtual.update', $tevirtual -> id], 'method' => 'PUT'])!!}
        @include('tevirtual.form.tevirtual')
        {!!Form::submit('Editar', ['class'=>'btn btn-primary'])!!}
      {!!Form::close()!!}
    </td>
  </tr>
  
@stop
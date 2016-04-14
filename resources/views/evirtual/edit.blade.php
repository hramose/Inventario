@extends('layouts.principal')

@section('content')

  @include('alerts.request')

  <hr>

  <h4><i class="fa fa-angle-right"></i> Editar Elemento Virtual </h4>
  
  <hr>

  <tr>
    <td>
      {!!Form::model($evirtual, ['route' => ['evirtual.update', $evirtual -> id], 'method' => 'PUT'])!!}
        @include('evirtual.form.evirtual')
        {!!Form::submit('Editar', ['class'=>'btn btn-primary'])!!}
      {!!Form::close()!!}
    </td>
  </tr>

  <hr>
  
  {!!link_to('/evirtual', $title='Elementos Virtuales', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}
  {!!link_to('/tevirtual', $title='Tipos de Elementos Virtuales', $attributes = ['class' => 'btn btn-default'], $secure = null)!!}

  <hr>
  
@stop
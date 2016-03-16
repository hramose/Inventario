@extends('layouts.principal')

@section('content')

  @include('alerts.request')

  {!!link_to('/evirtual', $title='Ver Elementos Virtuales', $attributes = ['class' => 'btn btn-theme'], $secure = null)!!}

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
  
@stop
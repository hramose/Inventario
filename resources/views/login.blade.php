@extends('layouts.ingresar')

@include ('alerts.errors')
@include ('alerts.request')

@section('content')
  
                
  {!!Form::open(['class'=>'form-login', 'route'=>'log.store', 'method'=>'POST'])!!}
  <h2 class="form-login-heading">Iniciar Sesión</h2>
  <div class="login-wrap">
    <div class="form-group">
      {!!Form::label('Correo')!!}
      {!!Form::text('email', null, ['class'=>'form-control', 'placeholder'=>'Ingresa el correo'])!!}
    </div>
    <div class="form-group">
      {!!Form::label('Contraseña')!!}
      {!!Form::password('password', ['class'=>'form-control', 'placeholder'=>'Ingresa la contraseña'])!!}
    </div>
    <hr>
    <button class="btn btn-theme btn-block" href="{{!! URL::to('index')!!}}" type="submit"><i class="fa fa-lock"></i> INGRESAR </button>
  </div>
  {!!Form::close()!!}

@stop
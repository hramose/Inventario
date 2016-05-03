@include('alerts.success')

<div class="form-group">
	{!!Form::label('evirtual_id','Seleccione el Nombre del Host: ')!!}
	{!!Form::select('evirtual_id', $evirtuals, null, ['id'=>'evirtual_id', 'class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('aplicacion_id','Seleccione la Aplicación: ')!!}
	{!!Form::select('aplicacion_id', $aplicacions, null, ['id'=>'aplicacion_id', 'class'=>'form-control'])!!}
</div>
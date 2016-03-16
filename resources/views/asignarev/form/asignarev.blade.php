@include('alerts.success')

<div class="form-group">
	{!!Form::label('evirtual_id','Seleccione el Elemento Virtual: ')!!}
	{!!Form::select('evirtual_id', $evirtuals, null, ['id'=>'evirtual_id', 'class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('aplicaciones_id','Seleccione la Aplicación: ')!!}
	{!!Form::select('aplicaciones_id', $aplicaciones, null, ['id'=>'aplicaciones_id', 'class'=>'form-control'])!!}
</div>
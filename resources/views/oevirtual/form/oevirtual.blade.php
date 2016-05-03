@include('alerts.success')

<div class="form-group">
	{!!Form::label('evirtual_id','Seleccione el Elemento Virtual: ')!!}
	{!!Form::select('evirtual_id', $evirtuals, null, ['id'=>'evirtual_id', 'class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('observaciones','Observación: ')!!}
	{!!Form::textarea('observaciones', null, ['id'=>'observaciones','class'=>'form-control', 'placeholder' => 'Ingresa la observación del elemento fisico'])!!}
</div>

<div class="form-group">
	{!!Form::label('reali_por','Realizado Por: ')!!}
	{!!Form::text('reali_por', null, ['id'=>'reali_por','class'=>'form-control', 'placeholder' => 'Ingrese su nombre'])!!}
</div>
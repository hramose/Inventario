@include('alerts.success')

<div class="form-group">
	{!!Form::label('evirtual_id','Seleccione el Elemento Físico: ')!!}
	{!!Form::select('evirtual_id', $evirtuals, null, ['id'=>'evirtual_id', 'class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('fec_backup','Fecha del BackUp: ')!!}
	{!!Form::date('fec_backup', null, ['id'=>'fec_backup', 'class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('mecanismo','Mecanismo: ')!!}
	{!!Form::text('mecanismo', null, ['id'=>'mecanismo','class'=>'form-control', 'placeholder' => 'Ingrese el mecanismo para hacer el BackUp'])!!}
</div>

<div class="form-group">
	{!!Form::label('observacion','Obcervación: ')!!}
	{!!Form::textarea('observacion', null, ['id'=>'observacion','class'=>'form-control', 'placeholder' => 'Ingrese una Observación'])!!}
</div>
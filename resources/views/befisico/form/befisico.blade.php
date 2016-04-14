@include('alerts.success')

<div class="form-group">
	{!!Form::label('efisico_id','Seleccione el Nombre del Host: ')!!}
	{!!Form::select('efisico_id', $efisicos, null, ['id'=>'efisico_id', 'class'=>'form-control'])!!}
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
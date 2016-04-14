<div class="form-group">
	{!!Form::label('user_id','Seleccione Su Nombre: ')!!}
	{!!Form::select('user_id', $users, null, ['id'=>'user_id', 'class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('efisico_id','Seleccione el Nombre del Host: ')!!}
	{!!Form::select('efisico_id', $efisicos, null, ['id'=>'efisico_id', 'class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('fec_ult_mantenimiento','Fecha Ultimo Mantenimiento: ')!!}
	{!!Form::date('fec_ult_mantenimiento', null, ['id'=>'fec_ult_mantenimiento','class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('observaciones','Observaciones: ')!!}
	{!!Form::textarea('observaciones', null, ['id'=>'observaciones','class'=>'form-control', 'placeholder' => 'Ingresa la Observación'])!!}
</div>
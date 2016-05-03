@include('alerts.success')

<div class="form-group">
	{!!Form::label('efisico_id','Seleccione el Nombre del Host: ')!!}
	{!!Form::select('efisico_id', $efisicos, null, ['id'=>'efisico_id', 'class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('aplicacion_id','Seleccione la Aplicación: ')!!}
	{!!Form::select('aplicacion_id', $aplicacions, null, ['id'=>'aplicacion_id', 'class'=>'form-control'])!!}
</div>
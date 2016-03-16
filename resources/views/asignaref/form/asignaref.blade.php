@include('alerts.success')

<div class="form-group">
	{!!Form::label('efisico_id','Seleccione el Elemento Físico: ')!!}
	{!!Form::select('efisico_id', $efisicos, null, ['id'=>'efisico_id', 'class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('aplicaciones_id','Seleccione la Aplicación: ')!!}
	{!!Form::select('aplicaciones_id', $aplicaciones, null, ['id'=>'aplicaciones_id', 'class'=>'form-control'])!!}
</div>
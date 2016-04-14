@include('alerts.success')

<div class="form-group">
	{!!Form::label('efisico_id','Seleccione el Elemento Fisico: ')!!}
	{!!Form::select('efisico_id', $efisicos, null, ['id'=>'efisico_id', 'class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('tevirtual_id','Seleccione el Hardware - Real: ')!!}
	{!!Form::select('tevirtual_id', $tipos, null, ['id'=>'tevirtual_id', 'class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('nombre','Nombre del Host: ')!!}
	{!!Form::text('nombre', null, ['id'=>'nombre','class'=>'form-control', 'placeholder' => 'Ingresa el nombre del elemento fisico'])!!}
</div>

<div class="form-group">
	{!!Form::label('estado','Estado: ')!!}
	{!!Form::select('estado', ['operativo' => 'Operativo', 'apagado' => 'Apagado'], null, ['id'=>'estado', 'class'=>'form-control'])!!}
</div>
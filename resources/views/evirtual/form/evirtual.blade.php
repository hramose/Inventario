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
	{!!Form::label('nomevirtual','Nombre del Host: ')!!}
	{!!Form::text('nomevirtual', null, ['id'=>'nomevirtual','class'=>'form-control', 'placeholder' => 'Ingresa el nombre del elemento fisico'])!!}
</div>

<div class="form-group">
	{!!Form::label('tipo','Tipo: ')!!}
	{!!Form::text('tipo', null, ['id'=>'tipo','class'=>'form-control', 'placeholder' => 'Ingresa el tipo de elemento virtual'])!!}
</div>

<div class="form-group">
	{!!Form::label('estado','Estado: ')!!}
	{!!Form::select('estado', ['operativo' => 'Operativo', 'apagado' => 'Apagado'], null, ['id'=>'estado', 'class'=>'form-control'])!!}
</div>
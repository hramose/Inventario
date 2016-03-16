@include('alerts.success')

<div class="form-group">
	{!!Form::label('efisico_id','Seleccione el Elemento Fisico (Si el elemento físico no se encuentra en la lista, da clic en el botón ver elementos virtuales, luego da clic en el botón gestionar elementos físicos y agrega un nuevo elemento físico): ')!!}
	{!!Form::select('efisico_id', $efisicos, null, ['id'=>'efisico_id', 'class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('tevirtual_id','Seleccione el Tipo de Elemento Virtual (Si el tipo de elemento virtual no se encuentra en la lista, da clic en el botón ver elementos virtuales, luego da clic en el botón gestionar tipos de elementos virtuales y agrega un nuevo tipo de elemento virtual): ')!!}
	{!!Form::select('tevirtual_id', $tipos, null, ['id'=>'tevirtual_id', 'class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('nombre','Nombre: ')!!}
	{!!Form::text('nombre', null, ['id'=>'nombre','class'=>'form-control', 'placeholder' => 'Ingresa el nombre del elemento fisico'])!!}
</div>

<div class="form-group">
	{!!Form::label('estado','Estado: ')!!}
	{!!Form::select('estado', ['operativo' => 'Operativo', 'apagado' => 'Apagado'], null, ['id'=>'estado', 'class'=>'form-control'])!!}
</div>
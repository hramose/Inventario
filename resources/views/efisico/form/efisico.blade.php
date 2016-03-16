@include('alerts.success')

<div class="form-group">
	{!!Form::label('user_id','Seleccione su Nombre: ')!!}
	{!!Form::select('user_id', $users, null, ['id'=>'user_id', 'class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('tefisico_id','Seleccione el Tipo de Elemento (Si el tipo de elemento físico no se encuentra en la lista, da clic en el botón ver elementos físicos, luego da clic en el botón gestionar tipos de elementos físicos y agrega un nuevo tipo de elemento físico): ')!!}
	{!!Form::select('tefisico_id', $tipos, null, ['id'=>'tefisico_id', 'class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('nombre','Nombre: ')!!}
	{!!Form::text('nombre', null, ['id'=>'nombre','class'=>'form-control', 'placeholder' => 'Ingresa el nombre del elemento fisico'])!!}
</div>

<div class="form-group">
	{!!Form::label('estado','Estado: ')!!}
	{!!Form::select('estado', ['operativo' => 'Operativo', 'apagado' => 'Apagado'], null, ['id'=>'estado', 'class'=>'form-control'])!!}
</div>
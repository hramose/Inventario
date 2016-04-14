@include('alerts.success')

<div class="form-group">
	{!!Form::label('user_id','Seleccione su Nombre: ')!!}
	{!!Form::select('user_id', $users, null, ['id'=>'user_id', 'class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('tefisico_id','Seleccione el Hardware - Real del Elemento Físico: ')!!}
	{!!Form::select('tefisico_id', $tipos, null, ['id'=>'tefisico_id', 'class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('nombre','Nombre del Host: ')!!}
	{!!Form::text('nombre', null, ['id'=>'nombre','class'=>'form-control', 'placeholder' => 'Ingresa el nombre del elemento físico'])!!}
</div>

<div class="form-group">
	{!!Form::label('estado','Estado: ')!!}
	{!!Form::select('estado', ['operativo' => 'Operativo', 'apagado' => 'Apagado'], null, ['id'=>'estado', 'class'=>'form-control'])!!}
</div>
@include('alerts.success')

<div class="form-group">
	{!!Form::label('aplicacion_id','Seleccione la Aplicación: ')!!}
	{!!Form::select('aplicacion_id', $aplicacions, null, ['id'=>'aplicacion_id', 'class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('descripcion','Descripción: ')!!}
	{!!Form::textarea('descripcion', null, ['id'=>'descripcion','class'=>'form-control', 'placeholder' => 'Ingresa una descripción de la aplicación'])!!}
</div>

<div class="form-group">
	{!!Form::label('version','Versión: ')!!}
	{!!Form::text('version', null, ['id'=>'version','class'=>'form-control', 'placeholder' => 'Ingresa la versión de la aplicación'])!!}
</div>

<div class="form-group">
	{!!Form::label('lic_programas','Licencia de la Aplicación: ')!!}
	{!!Form::text('lic_programas', null, ['id'=>'lic_programas','class'=>'form-control', 'placeholder' => 'Si la aplicación tiene licencia ingresala'])!!}
</div>
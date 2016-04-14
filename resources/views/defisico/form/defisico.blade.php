@include('alerts.success')

<div class="form-group">
	{!!Form::label('efisico_id','Seleccione el Nombre del Host: ')!!}
	{!!Form::select('efisico_id', $efisicos, null, ['id'=>'efisico_id', 'class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('ubicacion','Ubicación: ')!!}
	{!!Form::text('ubicacion', null, ['id'=>'ubicacion','class'=>'form-control', 'placeholder' => 'Ingresa la ubicación del elemento fisico'])!!}
</div>

<div class="form-group">
	{!!Form::label('h_status','Health Status: ')!!}
	{!!Form::text('h_status', null, ['id'=>'h_status','class'=>'form-control', 'placeholder' => 'Ingresa el health status del elemento fisico'])!!}
</div>

<div class="form-group">
	{!!Form::label('so','Sistema Operativo: ')!!}
	{!!Form::text('so', null, ['id'=>'so','class'=>'form-control', 'placeholder' => 'Ingresa el tipo de sistema operativo del elemento fisico'])!!}
</div>

<div class="form-group">
	{!!Form::label('cpu','CPU: ')!!}
	{!!Form::text('cpu', null, ['id'=>'cpu','class'=>'form-control', 'placeholder' => 'Ingresa el tipo de CPU del elemento fisico'])!!}
</div>

<div class="form-group">
	{!!Form::label('hd','HDD (Gb): ')!!}
	{!!Form::text('hd', null, ['id'=>'hd','class'=>'form-control', 'placeholder' => 'Ingresa la capacidad de disco duro del elemento fisico'])!!}
</div>

<div class="form-group">
	{!!Form::label('men','Men (G): ')!!}
	{!!Form::text('men', null, ['id'=>'men','class'=>'form-control', 'placeholder' => 'Ingresa la cantidad de men del elemento fisico'])!!}
</div>

<div class="form-group">
	{!!Form::label('act_pwd_201310','Act_PWD_201310: ')!!}
	{!!Form::text('act_pwd_201310', null, ['id'=>'act_pwd_201310','class'=>'form-control', 'placeholder' => 'Ingresa la marca del elemento fisico'])!!}
</div>

<div class="form-group">
	{!!Form::label('gestion','Gestión: ')!!}
	{!!Form::text('gestion', null, ['id'=>'gestion','class'=>'form-control', 'placeholder' => 'Ingresa la gestión del elemento fisico'])!!}
</div>

<div class="form-group">
	{!!Form::label('por_comprar','Por Comprar: ')!!}
	{!!Form::text('por_comprar', null, ['id'=>'por_comprar','class'=>'form-control', 'placeholder' => 'Llena este campo si existe un ítem por comprar para el elemento fisico'])!!}
</div>

<div class="form-group">
	{!!Form::label('serial','Serial: ')!!}
	{!!Form::text('serial', null, ['id'=>'serial','class'=>'form-control', 'placeholder' => 'Ingresa el serial del elemento fisico'])!!}
</div>

<div class="form-group">
	{!!Form::label('fecha_instalacion','Fecha de Instalación: ')!!}
	{!!Form::date('fecha_instalacion', null, ['id'=>'fecha_instalacion','class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('toperacion','Tiempo de Operación: ')!!}
	{!!Form::text('toperacion', null, ['id'=>'toperacion','class'=>'form-control', 'placeholder' => 'Ingresa el tiempo de operación del elemento fisico'])!!}
</div>

<div class="form-group">
	{!!Form::label('soporte','Soporte: ')!!}
	{!!Form::select('estado', ['na' => 'No Aplica', 'si' => 'Si', 'no' => 'No'], null, ['id'=>'estado', 'class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('ini_soporte','Iniciación del Soporte: ')!!}
	{!!Form::date('ini_soporte', null, ['id'=>'ini_soporte','class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('fin_soporte','Terminación del Soporte: ')!!}
	{!!Form::date('fin_soporte', null, ['id'=>'fin_soporte','class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('lic_so','Licencia del S.O: ')!!}
	{!!Form::text('lic_so', null, ['id'=>'lic_so','class'=>'form-control', 'placeholder' => 'Ingresa la licencia del S.O del elemento fisico'])!!}
</div>

<div class="form-group">
	{!!Form::label('lic_programas','Licencia del Programa: ')!!}
	{!!Form::text('lic_programas', null, ['id'=>'lic_programas','class'=>'form-control', 'placeholder' => 'Ingresa la licencia del programa del elemento fisico'])!!}
</div>

<div class="form-group">
	{!!Form::label('producto','Producto: ')!!}
	{!!Form::text('producto', null, ['id'=>'producto','class'=>'form-control', 'placeholder' => 'Ingresa el producto del elemento fisico'])!!}
</div>

<div class="form-group">
	{!!Form::label('contrato','Contrato: ')!!}
	{!!Form::text('contrato', null, ['id'=>'contrato','class'=>'form-control', 'placeholder' => 'Ingresa el contrato del elemento fisico'])!!}
</div>
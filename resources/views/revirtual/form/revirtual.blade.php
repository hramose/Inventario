@include('alerts.success')

<div class="form-group">
	{!!Form::label('evirtual_id','Seleccione el Nombre del Host: ')!!}
	{!!Form::select('evirtual_id', $evirtuals, null, ['id'=>'evirtual_id', 'class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('tred_id','Seleccione el Tipo de Red: ')!!}
	{!!Form::select('tred_id', $treds, null, ['id'=>'tred_id', 'class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('eth','Tipo de Conexión (Virtual - eth): ')!!}
	{!!Form::text('eth', null, ['id'=>'eth','class'=>'form-control', 'placeholder' => 'Ingrese el tipo de conexión (Virtual - eth)'])!!}
</div>

<div class="form-group">
	{!!Form::label('ip','Ip: ')!!}
	{!!Form::text('ip', null, ['id'=>'ip','class'=>'form-control', 'placeholder' => 'Ingrese la ip'])!!}
</div>

<div class="form-group">
	{!!Form::label('vlan','Vlan: ')!!}
	{!!Form::text('vlan', null, ['id'=>'vlan','class'=>'form-control', 'placeholder' => 'Ingrese la vlan'])!!}
</div>

<div class="form-group">
	{!!Form::label('gateway','Gateway: ')!!}
	{!!Form::text('gateway', null, ['id'=>'gateway','class'=>'form-control', 'placeholder' => 'Ingrese el gateway'])!!}
</div>
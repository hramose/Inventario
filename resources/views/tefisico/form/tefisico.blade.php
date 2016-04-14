@include('alerts.success')

<div class="form-group">
	{!!Form::label('fabricante','Hardware - Real: ')!!}
	{!!Form::text('fabricante', null, ['id'=>'fabricante','class'=>'form-control', 'placeholder' => 'Ingrese el fabricante del elemento fisico'])!!}
</div>

<div class="form-group">
	{!!Form::label('tipo','Tipo: ')!!}
	{!!Form::text('tipo', null, ['id'=>'tipo','class'=>'form-control', 'placeholder' => 'Ingresa el tipo de elemento fisico'])!!}
</div>
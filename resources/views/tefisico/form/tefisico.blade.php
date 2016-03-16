@include('alerts.success')

<div class="form-group">
	{!!Form::label('fabricante_id','Seleccione El Fabricante Del Elemento Físico (Si el fabricante no se encuentra en la lista, da clic en el botón ver tipos, luego da clic en el botón gestionar fabricantes y agrega un nuevo fabricante): ')!!}
	{!!Form::select('fabricante_id', $marcas, null, ['id'=>'fabricante_id', 'class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('tipo','Tipo de Elemento Físico : ')!!}
	{!!Form::text('tipo', null, ['id'=>'tipo','class'=>'form-control', 'placeholder' => 'Ingresa el tipo de elemento fisico'])!!}
</div>
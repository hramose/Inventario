<?php

namespace Inventario;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Asignaref extends Model
{
    use SoftDeletes;

    protected $table = 'asignarefs';

    protected $fillable = ['efisico_id', 'aplicacion_id'];

    protected $dates = ['deleted_at'];

    //Relación belongsTo
    public function efisico(){
    	return $this->belongsTo('Inventario\Efisico');
    }

    public function aplicacion(){
    	return $this->belongsTo('Inventario\Aplicacion');
    }
}

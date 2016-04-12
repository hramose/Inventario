<?php

namespace Inventario;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Asignar_e_f extends Model
{
	use SoftDeletes;

    protected $table = 'asignar_e_fs';

    protected $fillable = ['efisico_id', 'aplicaciones_id'];

    protected $dates = ['deleted_at'];

    //Relación belongsTo
    public function efisico(){
    	return $this->belongsTo('Inventario\Efisico');
    }

    public function aplicacion(){
    	return $this->belongsTo('Inventario\Aplicaciones');
    }
}
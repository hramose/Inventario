<?php

namespace Inventario;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Asignar_e_v extends Model
{
	use SoftDeletes;

    protected $table = 'asignar_e_vs';

    protected $fillable = ['evirtual_id', 'aplicaciones_id'];

    protected $dates = ['deleted_at'];

    //Relación belongsTo
    public function evirtual(){
    	return $this->belongsTo('Inventario\Evirtual');
    }

    public function aplicacion(){
    	return $this->belongsTo('Inventario\Aplicaciones');
    }
}

<?php

namespace Inventario;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Observaciones extends Model
{
	use SoftDeletes;

    protected $table = 'observaciones';

    protected $fillable = ['observaciones', 'reali_por', 'evirtual_id'];

    protected $dates = ['deleted_at'];

    //Relación belongsTo
    /*public function efisico(){
    	return $this->belongsTo('Inventario\Efisico');
    }*/

    public function evirtual(){
    	return $this->belongsTo('Inventario\Evirtual');
    }
}

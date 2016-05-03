<?php

namespace Inventario;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Asignarev extends Model
{
    use SoftDeletes;

    protected $table = 'asignarevs';

    protected $fillable = ['evirtual_id', 'aplicacion_id'];

    protected $dates = ['deleted_at'];

    //Relación belongsTo
    public function evirtual(){
    	return $this->belongsTo('Inventario\Evirtual');
    }

    public function aplicacion(){
    	return $this->belongsTo('Inventario\Aplicacion');
    }
}

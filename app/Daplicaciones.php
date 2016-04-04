<?php

namespace Inventario;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Daplicaciones extends Model
{
	use SoftDeletes;

    protected $table = 'daplicaciones';

    protected $fillable = ['descripcion', 'version', 'lic_programas', 'aplicaciones_id'];

    protected $dates = ['deleted_at'];

    //Relación belongsTo
    public function aplicacion(){
    	return $this->belongsTo('Inventario\App');
    }
}
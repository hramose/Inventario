<?php

namespace Inventario;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Daplicacion extends Model
{
    use SoftDeletes;

    protected $table = 'daplicacions';

    protected $fillable = ['descripcion', 'version', 'lic_programas', 'aplicacion_id'];

    protected $dates = ['deleted_at'];

    //Relación belongsTo
    public function aplicacion(){
    	return $this->belongsTo('Inventario\Aplicacion');
    }
}

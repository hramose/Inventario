<?php

namespace Inventario;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Aplicacion extends Model
{
    use SoftDeletes;

    protected $table = 'aplicacions';

    protected $fillable = ['nomapp'];

    protected $dates = ['deleted_at'];

    //Relación hasMany
    public function asiganarefs(){
        return $this->hasMany('Inventario\Asignaref');
    }

    public function asiganarevs(){
        return $this->hasMany('Inventario\Asignarev');
    }

    //Relación belongsToMany
    public function evirtuals(){
        return $this->belongsToMany('Inventario\Evirtual', 'asignarevs')
            ->withPivot('aplicacion_id');
    }

    public function efisicos(){
        return $this->belongsToMany('Inventario\Efisico', 'asignarefs')
            ->withPivot('aplicacion_id');
    }
}

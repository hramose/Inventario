<?php

namespace Inventario;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Aplicaciones extends Model
{
    use SoftDeletes;

    protected $table = 'aplicaciones';

    protected $fillable = ['nombre'];

    protected $dates = ['deleted_at'];

    //Relación hasMany
    /*public function efisicos(){
        return $this->belongsToMany('\Inventario\Efisico','asignar_e_fs')
            ->withPivot('aplicaciones_id');
    }

    public function evirtuals(){
        return $this->belongsToMany('\Inventario\Evirtual','asignar_e_vs')
            ->withPivot('aplicaciones_id');
    }*/

    //Relación belongsToMany
    public function asiganarefs(){
        return $this->hasMany('Inventario\Asignar_e_f');
    }

    public function asiganarevs(){
        return $this->hasMany('Inventario\Asignar_e_v');
    }
}

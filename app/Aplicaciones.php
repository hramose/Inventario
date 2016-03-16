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
    public function daplicaciones(){
        return $this->hasMany('Inventario\Daplicaciones');
    }

    /*public function asiganarefs(){
        return $this->hasMany('Inventario\Asignar_e_f');
    }*/

    /*public function asiganarevs(){
        return $this->hasMany('Inventario\Asignar_e_v');
    }*/
}

<?php

namespace Inventario;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Aplicacion extends Model
{
    use SoftDeletes;

    protected $table = 'aplicacions';

    protected $fillable = ['nombre'];

    protected $dates = ['deleted_at'];

    //Relación hasMany
    public function asiganarefs(){
        return $this->hasMany('Inventario\Asignaref');
    }

    public function asiganarevs(){
        return $this->hasMany('Inventario\Asignarev');
    }
}

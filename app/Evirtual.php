<?php

namespace Inventario;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Evirtual extends Model
{
    use SoftDeletes;

    protected $table = 'evirtuals';

    protected $fillable = ['nomevirtual', 'tipo','estado', 'efisico_id', 'tevirtual_id'];

    protected $dates = ['deleted_at'];

    //Relación belongsTo
    public function efisico(){
    	return $this->belongsTo('Inventario\Efisico');
    }

    public function tevirtual(){
    	return $this->belongsTo('Inventario\Tevirtual');
    }

    //Relación hasMany
    public function descripciones(){
    	return $this->hasMany('Inventario\Devirtual');
    }

    public function observaciones(){
    	return $this->hasMany('Inventario\Oevirtual');
    }

    public function backups(){
    	return $this->hasMany('Inventario\Bevirtual');
    }

    public function reds(){
    	return $this->hasMany('Inventario\Revirtual');
    }

    public function asignarevs(){
    	return $this->hasMany('Inventario\Asignarev');
    }

    //Relación belongsToMany
    public function aplicacions(){
        return $this->belongsToMany('Inventario\Aplicacion', 'asignarevs')
            ->withPivot('evirtual_id');
    }
}

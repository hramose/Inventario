<?php

namespace Inventario;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Efisico extends Model
{
    use SoftDeletes;

    protected $table = 'efisicos';

    protected $fillable = ['nombre', 'estado', 'user_id', 'tefisico_id'];

    protected $dates = ['deleted_at'];

    //Relación belongsTo
    public function user(){
    	return $this->belongsTo('Inventario\User');
    }

    public function tefisico(){
    	return $this->belongsTo('Inventario\Tefisico');
    }

    //Relación hasMany
    public function hmantenimientos(){
    	return $this->hasMany('Inventario\Hmantenimiento');
    }

    public function descripciones(){
    	return $this->hasMany('Inventario\Defisico');
    }

    public function observaciones(){
    	return $this->hasMany('Inventario\Oefisico');
    }

    public function backups(){
    	return $this->hasMany('Inventario\Befisico');
    }

    public function reds(){
    	return $this->hasMany('Inventario\Refisico');
    }

    public function evirtuals(){
        return $this->hasMany('Inventario\Evirtual');
    }

    public function asiganarefs(){
        return $this->hasMany('Inventario\Asignar_e_f');
    }

    //Relación hasMany
    /*public function aplicaciones(){
        return $this->belongsToMany('\Inventario\Aplicaciones','asignar_e_fs')
            ->withPivot('efisico_id');
    }*/
}

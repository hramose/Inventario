<?php

namespace Inventario;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tefisico extends Model
{
    use SoftDeletes;

    protected $table = 'tefisicos';

    protected $fillable = ['tipo', 'fabricante_id'];

    protected $dates = ['deleted_at'];

    //Relación belongsTo
    public function fabricante(){
    	return $this->belongsTo('Inventario\Fabricante');
    }

    //Relación hasMany
    public function efisicos(){
    	return $this->hasMany('Inventario\Efisico');
    }
}

<?php

namespace Inventario;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fabricante extends Model
{

	use SoftDeletes;

    protected $table = "fabricantes";

    protected $fillable = ['marca'];

    protected $dates = ['deleted_at'];

    //Relación hasMany
    public function tefisicos(){
    	return $this->hasMany('Inventario\Tefisico');
    }
}

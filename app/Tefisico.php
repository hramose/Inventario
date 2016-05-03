<?php

namespace Inventario;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tefisico extends Model
{
    use SoftDeletes;

    protected $table = 'tefisicos';

    protected $fillable = ['fabricante', 'tipo'];

    protected $dates = ['deleted_at'];

	//Relación hasMany
    public function efisicos(){
    	return $this->hasMany('Inventario\Efisico');
    }
}

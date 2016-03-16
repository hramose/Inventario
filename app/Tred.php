<?php

namespace Inventario;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tred extends Model
{
	use SoftDeletes;

    protected $table = 'treds';

    protected $fillable = ['tipo_red'];

    protected $dates = ['deleted_at'];
	
	//Relación hasMany
    public function reds(){
    	return $this->hasMany('Inventario\Red');
    }

}

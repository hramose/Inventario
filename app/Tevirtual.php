<?php

namespace Inventario;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tevirtual extends Model
{
    use SoftDeletes;

    protected $table = 'tevirtuals';

    protected $fillable = ['nombre'];

    protected $dates = ['deleted_at'];

    //Relación hasMany
    public function tevirtuals(){
    	return $this->hasMany('Inventario\Evirtual');
    }
}

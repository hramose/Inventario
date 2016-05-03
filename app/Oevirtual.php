<?php

namespace Inventario;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Oevirtual extends Model
{
    use SoftDeletes;

    protected $table = 'oevirtuals';

    protected $fillable = ['observaciones', 'reali_por', 'evirtual_id'];

    protected $dates = ['deleted_at'];

    //Relación belongsTo
    public function evirtual(){
    	return $this->belongsTo('Inventario\Evirtual');
    }
}

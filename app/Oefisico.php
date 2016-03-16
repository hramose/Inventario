<?php

namespace Inventario;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Oefisico extends Model
{
	use SoftDeletes;

    protected $table = 'oefisicos';

    protected $fillable = ['observaciones', 'reali_por', 'efisico_id'];

    protected $dates = ['deleted_at'];

    //Relación belongsTo
    public function efisico(){
    	return $this->belongsTo('Inventario\Efisico');
    }
}

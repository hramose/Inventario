<?php

namespace Inventario;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hmantenimiento extends Model
{
    use SoftDeletes;

    protected $table = 'hmantenimientos';

    protected $fillable = ['fec_ult_mantenimiento', 'observaciones', 'user_id', 'efisico_id'];

    protected $dates = ['deleted_at'];

    //Relación belongsTo
    public function user(){
    	return $this->belongsTo('Inventario\User');
    }

    public function efisico(){
    	return $this->belongsTo('Inventario\Efisico');
    }
}

<?php

namespace Inventario;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bevirtual extends Model
{
    use SoftDeletes;

    protected $table = 'bevirtuals';

    protected $fillable = ['fec_backup', 'mecanismo', 'observacion', 'evirtual_id'];

    protected $dates = ['deleted_at'];
    
    //Relación belongsTo
    public function evirtual(){
    	return $this->belongsTo('Inventario\Evirtual');
    }
}

<?php

namespace Inventario;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Befisico extends Model
{
    use SoftDeletes;

    protected $table = 'befisicos';

    protected $fillable = ['fec_backup', 'mecanismo', 'observacion', 'efisico_id'];

    protected $dates = ['deleted_at'];
    
    //Relación belongsTo
    public function efisico(){
    	return $this->belongsTo('Inventario\Efisico');
    }
}

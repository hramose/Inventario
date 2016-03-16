<?php

namespace Inventario;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Backup extends Model
{
	use SoftDeletes;

    protected $table = 'backups';

    protected $fillable = ['fec_backup', 'mecanismo', 'observacion', 'evirtual_id'];

    protected $dates = ['deleted_at'];
    
    //Relación belongsTo
    /*public function efisico(){
    	return $this->belongsTo('Inventario\Efisico');
    }*/

    public function evirtual(){
    	return $this->belongsTo('Inventario\Evirtual');
    }
}

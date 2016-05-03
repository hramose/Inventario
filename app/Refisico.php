<?php

namespace Inventario;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Refisico extends Model
{
    use SoftDeletes;

    protected $table = 'refisicos';

    protected $fillable = ['eth', 'vlan', 'ip', 'gateway', 'tred_id', 'efisico_id'];

    protected $dates = ['deleted_at'];
    
    //Relación belongsTo
    public function tred(){
    	return $this->belongsTo('Inventario\Tred');
    }

    public function efisico(){
    	return $this->belongsTo('Inventario\Efisico');
    }
}

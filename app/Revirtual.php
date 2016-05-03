<?php

namespace Inventario;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Revirtual extends Model
{
    use SoftDeletes;

    protected $table = 'revirtuals';

    protected $fillable = ['eth', 'vlan', 'ip', 'gateway', 'tred_id', 'evirtual_id'];

    protected $dates = ['deleted_at'];

    //Relación belongsTo
    public function tred(){
    	return $this->belongsTo('Inventario\Tred');
    }

    public function evirtual(){
    	return $this->belongsTo('Inventario\Evirtual');
    }
}

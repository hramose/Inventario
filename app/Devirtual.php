<?php

namespace Inventario;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Devirtual extends Model
{
	use SoftDeletes;

    protected $table = 'devirtuals';

    protected $fillable = ['ubicacion', 'h_status', 'so', 'cpu', 'hd', 'men', 'act_pwd_201310', 'gestion', 'lic_so', 'lic_programas', 'evirtual_id'];

    protected $dates = ['deleted_at'];
    
    //Relación belongsTo
    public function evirtual(){
    	return $this->belongsTo('Inventario\Evirtual');
    }
}

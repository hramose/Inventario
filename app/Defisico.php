<?php

namespace Inventario;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Defisico extends Model
{
	use SoftDeletes;

    protected $table = 'defisicos';

    protected $fillable = ['ubicacion', 'h_status', 'so', 'cpu', 'hd', 'men', 'act_pwd_201310', 'gestion', 'por_comprar', 'serial', 'fecha_instalacion', 'toperacion', 'soporte', 'ini_soporte', 'fin_soporte', 'lic_so', 'lic_programas', 'producto', 'contrato', 'efisico_id'];

    protected $dates = ['deleted_at'];
    
    //Relación belongsTo
    public function efisico(){
    	return $this->belongsTo('Inventario\Efisico');
    }
}

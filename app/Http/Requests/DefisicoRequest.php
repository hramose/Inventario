<?php

namespace Inventario\Http\Requests;

use Inventario\Http\Requests\Request;

class DefisicoRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'ubicacion' => 'required|min:2', 
            'h_status' => 'required|min:1', 
            'so' => 'required|min:2', 
            'cpu' => 'required|min:1', 
            'hd' => 'required|min:1', 
            'men' => 'required|min:1', 
            'act_pwd_201310' => 'required|min:1', 
            'gestion' => 'required|min:2',
            'por_comprar' => 'required|min:2',
            'serial' => 'required|unique:defisicos',
            'toperacion' => 'required|min:2',
            'lic_so' => 'required|min:2', 
            'lic_programas' => 'required|min:2', 
            'producto' => 'required|min:2',
            'efisico_id' => 'required',
        ];
    }
}

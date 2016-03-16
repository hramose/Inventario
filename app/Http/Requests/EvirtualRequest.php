<?php

namespace Inventario\Http\Requests;

use Inventario\Http\Requests\Request;

class EvirtualRequest extends Request
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
            'nombre' => 'required|unique:evirtuals', 
            'estado' => 'required|in:operativo,apagado', 
            'efisico_id' => 'required', 
            'tevirtual_id' => 'required',
        ];
    }
}

<?php

namespace Inventario\Http\Requests;

use Inventario\Http\Requests\Request;

class DevirtualRequest extends Request
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
            'so' => 'required|min:2', 
            'cpu' => 'required|min:1', 
            'men' => 'required|min:1', 
            'evirtual_id' => 'required',
        ];
    }
}

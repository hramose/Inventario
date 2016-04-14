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
            'efisico_id' => 'required',
        ];
    }
}

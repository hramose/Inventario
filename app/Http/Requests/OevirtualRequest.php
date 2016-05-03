<?php

namespace Inventario\Http\Requests;

use Inventario\Http\Requests\Request;

class OevirtualRequest extends Request
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
            'observaciones' => 'required|min:2',
            'reali_por' => 'required|min:3',
            'evirtual_id' => 'required',
        ];
    }
}

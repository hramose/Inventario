<?php

namespace Inventario\Http\Requests;

use Inventario\Http\Requests\Request;

class HefisicoRequest extends Request
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
            'fec_ult_mantenimiento' => 'required',
            'observaciones' => 'required',
            'user_id' => 'required',
            'efisico_id' => 'required',
        ];
    }
}

<?php

namespace Inventario\Http\Requests;

use Inventario\Http\Requests\Request;

class RevirtualRequest extends Request
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
            'tred_id'=> 'required',
            'eth' => 'required',
            'ip'=> 'required',  
            'evirtual_id'=> 'required',
        ];
    }
}

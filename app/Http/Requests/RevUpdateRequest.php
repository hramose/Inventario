<?php

namespace Inventario\Http\Requests;

use Inventario\Http\Requests\Request;

class RevUpdateRequest extends Request
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
            'eth' => 'required', 
            'vlan'=> 'required', 
            'ip'=> 'required',
            'gateway'=> 'required', 
            'tred_id'=> 'required', 
            'evirtual_id'=> 'required',
        ];
    }
}
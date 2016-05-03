<?php

namespace Inventario\Http\Requests;

use Inventario\Http\Requests\Request;

class EfisicoRequest extends Request
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
            'nombre' => 'required|unique:efisicos',
            'estado' => 'required|in:operativo,apagado',
            'user_id' => 'required',
            'tefisico_id' => 'required',
        ];
    }
}

<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class MascotaRequest extends Request
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
        'nombre' => 'required|min:3',
       
        'color' => 'required|min:3',
        
        'tamaño' => 'required|min:3',
        'detalle' => 'required|min:3',
        'fecha_lugar' => 'required|min:3',

        ];
    }
}

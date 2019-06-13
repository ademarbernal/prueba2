<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RequisitospeqRequest extends Request
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
            'requisitospeq' => 'required|min:10',
        ];
    }
}
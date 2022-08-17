<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateEditTextoRequest extends FormRequest
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
            'content' => 'required|min:2|max:255',
        ];
    }

    public function messages()
    {
        return [
            'content.min' => 'O minimo é de 2 caracteres',
            'content.max' => 'O maximo é de 255 caracteres',
            'content.requierd' => 'O campo é obrigatório.',
        ];
    }

}

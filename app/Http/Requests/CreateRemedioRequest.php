<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateRemedioRequest extends FormRequest
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
            'nome' => 'required|min:4|max:255',
            'funcionalidade' => 'required|min:10|max:255',
            'quantidadeTomar' => 'required|numeric',
            'estoque' => 'required|numeric',
            'isReceitado' => 'required|numeric',
            'quantasVezes' => 'required|numeric',
            'intervalo' => 'required|numeric',
            'tempoEmDias' => 'required|numeric',
        ];
    }
}

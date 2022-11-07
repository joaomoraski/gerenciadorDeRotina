<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUserRequest extends FormRequest
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
            'name' => 'min:4|required',
            'email' => 'email|required|unique:users',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6'
        ];
    }

    public function messages()
    {
        return [
            'name.min' => 'O mínimo de caracteres para um nome é 4',
            'name.required' => 'O campo nome é obrigatório',
            'email.required' => 'O campo email é obrigatório',
            'email.email' => 'O campo de email precisa ser um email valido',
            'password.min' => 'O minimo de uma senha é 6 digitos',
            'password.required' => 'O campo de senha é obrigatório',
            'password.confirmed' => 'Os campos de senha e a confirmação não são iguais',
            'password_confirmation.required' => 'A confirmação de senha é obrigatória',
            'email.unique' => 'Informe um email que não tenha sido cadastrado ainda'
        ];
    }


}

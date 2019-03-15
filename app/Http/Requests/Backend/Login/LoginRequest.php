<?php

namespace App\Http\Requests\Backend\Login;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
          'email' => 'required|email|exists:usuarios',
          'senha' => 'required|string|min:6'
        ];
    }

    function messages(){
      return [
        'email.exists' => 'E-mail não encontrado em nossa base da dados!',
        'senha.min'     => 'A senha deve ter ao menos 6 caracteres!'
      ];
    }
}

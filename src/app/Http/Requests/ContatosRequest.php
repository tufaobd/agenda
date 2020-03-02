<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContatosRequest extends FormRequest
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
        switch($this->method())
        {
            case 'GET':
            case 'DELETE':
                return [];
                break;
            case 'PATCH':
            case 'PUT':
            case 'POST':
                return [
                    'nome'          => 'required|min:3|max:40',
                    'sobrenome'     => 'required|min:3|max:50',
                    'email'         => 'required|min:3|max:40',
                    'telefone'      => 'required|numeric'

                ];
                break;
            default:
                break;
        }
    }

    public function messages()
    {
        return [
            'nome.required' => 'Campo usuario é requerido',
            'nome.min' => 'Campo nome deve ter mais de 3 caracteres',
            'nome.max' => 'Campo nome deve ter menos de 40 caracteres',
            'sobrenome.required' => 'Campo Sobrenome é requerido',
            'sobrenome.min' => 'Campo Sobrenome deve ter mais de 3 caracteres',
            'sobrenome.max' => 'Campo Sobrenome deve ter menos de 40 caracteres',
            'email.required' => 'Campo Email é requerido',
            'email.min' => 'Campo Email deve ter mais de 3 caracteres',
            'email.max' => 'Campo Email deve ter menos de 40 caracteres',
            'telefone.required' => 'Campo telefone é requerido',
            'telefone.numeric' => 'Campo Telefone só aceita números',

        ];
    }
}

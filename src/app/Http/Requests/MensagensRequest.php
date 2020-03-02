<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MensagenssRequest extends FormRequest
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
                    'contato_id'          => 'required|uuid',
                    'descricao'     => 'required|min:3|max:50',
                ];
                break;
            default:
                break;
        }
    }

    public function messages()
    {
        return [
            'contato_id.required' => 'Campo Contato é requerido',
            'nome.min' => 'Campo nome deve ter mais de 3 caracteres',
            'descricao.required' => 'Campo Descrição é Obrigatorio',
            'descricao.min' => 'Campo Descrição deve ter mais de 3 caracteres',
            'descricao.max' => 'Campo Descrição deve ter menos de 40 caracteres',

        ];
    }
}

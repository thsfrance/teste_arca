<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpresaCadastroRequest extends FormRequest
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
            'titulo'        => 'required|max:190',
            'telefone'      => 'required|numeric',
            'endereco'      => 'required|max:190',
            'cep'           => 'required|numeric',
            'cidade'        => 'required|max:190',
            'estado'        => 'required|max:190',
            'descricao'     => 'required|max:190',
            'categoria_id'  => 'required|numeric'
        ];
    }
    
    public function messages()
    {
        return [
            'categoria_id.required' => 'The field categoria is required',
        ];
    }
}

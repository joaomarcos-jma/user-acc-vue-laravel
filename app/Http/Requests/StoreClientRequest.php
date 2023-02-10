<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClientRequest extends FormRequest
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
            'tx_email' => 'required|email|unique:tb_clients',
            'client_name' => 'required|string|max:50',
            'tx_phone' => 'required|string|max:15',
            'nr_cpf' => 'required|string|max:11',
            'nr_rg' => 'required|string|max:13',
            'tx_zip_code' => 'required|string|max:8',
            'tx_street' => 'required|string|max:50',
            'tx_city' => 'required|string|max:50',
            'tx_state' => 'required|string|max:2',
        ];
    }

    public function messages()
    {
        return [
            'tx_email.required' => 'Email é obrigatório!',
            'tx_email.unique' => 'O email já existe!',
            'tx_email.email' => 'Email inválido!',
            'client_name.required' => 'Nome do cliente é Obrigatório!',
            'tx_phone.required' => ' Telefone é Obrigatório!',
            'nr_cpf.required' => 'CPF é Obrigatório!',
            'nr_rg.required' => 'RG é Obrigatório!',
            'tx_zip_code.required' => 'CEP é Obrigatório!',
            'tx_street.required' => 'Logradouro é Obrigatório!',
            'tx_city.required' => 'Cidade é Obrigatório!',
            'tx_state.required' => 'sigla UF é Obrigatório!',
        ];
    }
}

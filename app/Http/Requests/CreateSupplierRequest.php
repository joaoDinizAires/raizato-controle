<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateSupplierRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'name'=>['required','string','max:254'],
            'cnpj'=>['required','string','regex:/^\d{2}\.\d{3}\.\d{3}\/\d{4}-\d{2}$/', 'unique:suppliers,cnpj'],
            'email' => ['required','string','email','max:254','unique:suppliers,email'],
            'phone' => ['required', 'string'],
        ];
    }
    public function messages()
    {
        return [
            'cnpj.required' => 'O CNPJ é obrigatório.',
            'cnpj.regex' => 'O CNPJ deve estar no formato XX.XXX.XXX/0001-XX.',
            'cnpj.unique' => 'Este CNPJ já está em uso.',
            'phone.required' => 'O telefone é obrigatório.',
        ];
    }
}

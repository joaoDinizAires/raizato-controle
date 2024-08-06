<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string','max:254'],
            'description' => ['required','string'],
            'code' => ['required','string','max:12'],
            'quantity' => ['required','numeric'],
            'sale_price' => ['required','numeric'],
            'cost_price' => ['required','numeric'],
            'supplier_id' => ['required', 'numeric','exists:App\Models\Supplier,id'],
            'expiration_date' => ['required', 'date', 'after_or_equal:today'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O nome é obrigatório.',
            'name.string' => 'O nome deve ser uma string.',
            'name.max' => 'O nome não pode ter mais que 254 caracteres.',
            'description.required' => 'A descrição é obrigatória.',
            'description.string' => 'A descrição deve ser uma string.',
            'description.min' => 'A descrição deve ter pelo menos 15 caracteres.',
            'price.required' => 'O preço é obrigatório.',
            'price.numeric' => 'O preço deve ser um número.',
            'code.required' => 'O código é obrigatório.',
            'code.string' => 'O código deve ser uma string.',
            'code.max' => 'O código não pode ter mais que 12 caracteres.',
            'quantity.required'=> 'A quantidade é obrigatória.',
            'quantity.numeric' => 'A quantidade deve ser um número.',
            'sale_price.required' => 'O preço de venda é obrigatório.',
            'sale_price.numeric' => 'O preço de venda deve ser um número.',
            'cost_price.required' => 'O preço de custo é obrigatório.',
            'cost_price.numeric' => 'O preço de custo deve ser um número.',
            'supplier_id.required' => 'O fornecedor é obrigatório.',
            'supplier_id.numeric' => 'O fornecedor deve ser um número.',
            'supplier_id.exists' => 'O fornecedor especificado não existe.',
            'expiration_date.required' => 'A data de validade é obrigatória.',
            'expiration_date.date' => 'A data de validade deve ser uma data válida.',
            'expiration_date.after_or_equal' => 'A data de validade deve ser hoje ou uma data futura.',
        ];
    }

}

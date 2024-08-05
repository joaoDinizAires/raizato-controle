<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class CreateUserRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {   
        //As senhas precisam ter no minimo uma letra, uma maiuscula e minuscula, um numero, e não pode ter vazado em algum data leak
        return [
            'username' => ['required','string','unique:users','min:5','max:254'],
            'email' => ['required','email','unique:users','max:254'],
            'password'=> ['required','string','confirmed',Password::min(8)
                ->letters()
                ->mixedCase()
                ->numbers()
                ->uncompromised()],
            'user_type'=>['required','string','in:admin,manager,user']
            
        ];
    }
    public function messages()
    {
        return [
            'username.required' => 'O nome de usuário é obrigatório.',
            'username.string' => 'O nome de usuário deve ser uma string.',
            'username.unique' => 'Este nome de usuário já está em uso.',
            'username.min' => 'O nome de usuário deve ter no mínimo 5 caracteres.',
            'username.max' => 'O nome de usuário deve ter no máximo 254 caracteres.',
            
            'email.required' => 'O email é obrigatório.',
            'email.email' => 'O email deve ser um endereço de email válido.',
            'email.unique' => 'Este email já está em uso.',
            'email.max' => 'O email deve ter no máximo 254 caracteres.',
            
            'password.required' => 'A senha é obrigatória.',
            'password.string' => 'A senha deve ser uma string.',
            'password.confirmed' => 'A confirmação da senha não confere.',
            'password.min' => 'A senha deve ter no mínimo 8 caracteres.',
            'password.letters' => 'A senha deve conter pelo menos uma letra.',
            'password.mixedCase' => 'A senha deve conter letras maiúsculas e minúsculas.',
            'password.numbers' => 'A senha deve conter pelo menos um número.',
            'password.uncompromised' => 'A senha não parece segura.',
            
            'user_type.required' => 'O tipo de usuário é obrigatório.',
            'user_type.string' => 'O tipo de usuário deve ser uma string.',
            'user_type.in' => 'O tipo de usuário selecionado é inválido. Escolha entre admin, manager ou user.',
        ];
    }
}

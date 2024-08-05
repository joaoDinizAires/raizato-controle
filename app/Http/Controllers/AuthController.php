<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use App\Models\User;

class AuthController extends Controller
{
    public function index() {

        return view('auth.login');
    }

    public function create(){
         //depois colocar verificação se ja existe admin
        return view('auth.register');
    }
    public function authenticate(Request $request){

        //valida a entrada para autenticação

        $credentials = $request->validate([
            'email'=> ['required','email'],
            'password' => ['required']
        ]);

        //tenta o login e refaz o token da sessão (evitar Session hijacking) 
        if(Auth::attempt([
            'email'=> $credentials['email'],
            'password'=> $credentials['password']
        ])){
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        //se login falhar volta para pagina com a message bag
        return back()->withErrors([
            'email' => 'Credenciais inválidas',
        ])->onlyInput('email');

    }
    //regras de validação e mensagens estão em CreateUserRequest
    public function store(CreateUserRequest $request){
        $validatedData = $request->validated();
        $user = User::create($validatedData);
        Auth::login($user);
        return redirect('/');
    }
}

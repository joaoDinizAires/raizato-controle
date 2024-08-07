<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsManager
{

    public function handle($request, Closure $next)
    {
        if (Auth::check() && (Auth::user()->user_type == 'manager' || Auth::user()->user_type == 'admin')) {
            return $next($request);
        }
        return redirect('/')->with('error', 'Você não tem permissão para acessar esta página.');
    }
}

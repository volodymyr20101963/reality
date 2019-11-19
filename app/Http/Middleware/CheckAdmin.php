<?php


namespace App\Http\Middleware;


use Closure;
use Illuminate\Support\Facades\Auth;

class CheckAdmin
{
    public function handle($request, Closure $next)
    {
//        якщо користувач Admin
        if (Auth::user()->role == 'ADMIN') {
            return $next($request);
        }
        return redirect()->route('index');

    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckUserArticle
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $article = $request->route()->parameter('article');

//        якщо користувач залогувався (чи зареєструвався) (тобто є в базі)
        if (Auth::user()->id == $article->user_id) {
            return $next($request);
        }
        return redirect()->route('index');
    }
}

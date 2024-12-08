<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OnlyUserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {


        if(auth()->check()){
            return $next($request);
        } else {
            session()->flash('error', "Kamu harus login terlebih dahulu sebelum mengakses fitur ini!");

            return \response()->redirectToRoute('login-page');
        }
    }
}

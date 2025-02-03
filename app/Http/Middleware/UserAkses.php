<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserAkses
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    // mengecek apakah role nya sama seperti yang di handle
    {
        if(auth()->user()->role === $role){ 
            return $next($request);
        }
        $url = "/" . auth()->user()->role;
        return redirect($url)->with('error',"Anda tidak dapat mengakses halaman ini");
    }
}

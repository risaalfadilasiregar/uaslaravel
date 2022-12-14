<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class User
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
        $pengguna = Auth::user();
        if($pengguna != null) {
            if( $pengguna->role == "User"){
                return $next($request);
            }
            return redirect()->route('home');
        }
        return redirect('/login');
    }
}

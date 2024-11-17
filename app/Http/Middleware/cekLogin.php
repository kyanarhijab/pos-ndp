<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\session;

class cekLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
         
         if ( !Session::has('pos')  ){
            return redirect('login')->withErrors('login_gagal','Tidak Memiliki Akses');
        } else{
            return $next($request);
        }

       
        
        return redirect('login')->withErrors(['login_gagal'=>session()->get('pos').$roles]);
    }
}

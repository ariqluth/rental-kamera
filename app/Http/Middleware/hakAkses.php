<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class hakAkses
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user()->hak_akses == 1){
             return $next($request);
        }

        // if (!\Session::has('id_jalur') &&!\Session::has('id_c_mhs')) {
        //     return redirect('/registrasi/login');
        // }
        // return $next($request);


        return redirect('home')->with('error',"You don't have pemilik access.");
    }
}

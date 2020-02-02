<?php
namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
class verifictipo
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
        if ( auth()->user()->tipo == 'Administrador' ){
            return route('login');
    
        }else{
            return route('index');
        }
    
    }
        
        
       
    
}


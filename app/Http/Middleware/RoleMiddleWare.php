<?php

namespace App\Http\Middleware;

use Closure;

class RoleMiddleWare
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        echo "User role is ".$role;
        return $next($request);
    }
    
    public function terminate($request, $response)
    {
      echo "<br>Executing statements of terminate method of role.";
    }
}

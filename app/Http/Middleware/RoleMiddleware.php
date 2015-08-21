<?php

namespace App\Http\Middleware;

use Closure;
use App\Http\Controllers\ComiteController;
use Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  $role
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        // Verifing user role and comite.

        $user = Auth::user();

        if(!( $user->role->role_name == $role)
        {
            return response('Unauthorized.', 401);
        }

        return $next($request);
    }
}

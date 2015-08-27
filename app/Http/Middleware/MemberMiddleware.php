<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class MemberMiddleware
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
        // Verifing user role and comite.

        $user = Auth::user();
        // dd($user->comite->abreviation);

        if(!( $user->member && strtoupper($request->abrev) == $user->comite->abreviation))
        {
            return response('Unauthorized.', 401);
        }

        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use App\User;

class UserRoles
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
        
        $user = User::find(auth()->user()->id);
        if ($user->hasRole($role))
            return $next($request);
        else
            return redirect('/');
    }
}

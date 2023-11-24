<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ifUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $select = User::select('type')->where('id', Auth::id())->first();
        if(!Auth::check()){
            return(redirect('/login'));
        }
        if ($select->type !== 'user') {
            abort(403, 'Unauthorized action.');
        }
        return $next($request);
}   

 
}
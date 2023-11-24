<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;


class ifAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
    	$role = UserRole::where('userid', Auth::user()->id)->first();
    	if(Auth::user()&&$role->roleid==0){
    		 return $next($request);
    	}
       abort(403);
    }
}

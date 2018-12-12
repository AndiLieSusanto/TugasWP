<?php

namespace App\Http\Middleware;

use Closure;

class AuthMember
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
        $role = session('role', 'guess'); // kalau role nya gak ada default nya guess
        if($role != 'member') // jadi kalau role nya gak di set maka dia pasti guess
        {
            return redirect()->back();
        }
        return $next($request);
    }
}

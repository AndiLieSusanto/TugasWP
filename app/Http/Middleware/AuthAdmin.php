<?php

namespace App\Http\Middleware;

use Closure;

class AuthAdmin
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
        if($role != 'admin') // jadi kalau role nya gak di set maka dia pasti guess
        {
            if($role == 'guess')
            {
                return redirect(url(''));
            }
            else if($role == 'member')
            {
                return redirect(url('member/'));
            }
        }
        return $next($request);
    }
}

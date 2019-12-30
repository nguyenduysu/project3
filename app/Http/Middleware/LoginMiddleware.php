<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class LoginMiddleware
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
        if(Auth::check()) {
            $user = Auth::user();
            if($user->level == 1 || $user->level == 2) {
                return $next($request);
            } else {
                return redirect()->route('getLogin')->with(['flash_level' => 'fail', 'flash_message' => 'Tài khoản của bạn không được quyền truy cập vào nội dung này!']);
            }
        } else {
            return redirect()->route('getLogin');
        }
    }
}

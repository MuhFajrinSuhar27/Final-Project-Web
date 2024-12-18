<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->role == 'admin') {
                return redirect()->route('dashboard.admin.dAdmin');
            } elseif ($user->role == 'student') {
                return redirect()->route('dashboard.user.home-user');
            } elseif ($user->role == 'teacher') {
                return redirect()->route('dashboard.teacher.home-teacher');
            }
        }

        return $next($request);
    }
}
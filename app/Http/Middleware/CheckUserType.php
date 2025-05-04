<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUserType
{
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        if ($user && $user->usertype === 0) {
            // Redirect to the 'admin.index' named route
            return redirect()->route('admin.index');
        }

        return $next($request);
    }
}

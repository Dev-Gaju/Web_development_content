<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Cache;
use Illuminate\Support\Facades\Auth;


class UserActivity
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
        if (Auth::check()) {
            $chrckExpair = Carbon::now()->addMinute(1);
            Cache::put('user-online' . Auth::user()->id, true, $chrckExpair);
        }

        return $next($request);
    }
}

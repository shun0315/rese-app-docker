<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\MustVerifyEmail;
// use Illuminate\Support\Facades\Redirect;
// use Illuminate\Support\Facades\URL;

class EnsureEmailIsVerified
{
    public function handle($request, Closure $next)
    {
        if (
            !$request->user() ||
            ($request->user() instanceof MustVerifyEmail &&
                !$request->user()->hasVerifiedEmail())
        ) {
            return abort(403, 'Your email address is not verified.');
        }

        return $next($request);
    }
}

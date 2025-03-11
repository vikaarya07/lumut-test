<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Contracts\Auth\Factory as Auth;

class IsAdmin
{
    protected Auth $auth;

    /**
     * Inject authentication service.
     */
    public function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = $this->auth->guard()->user();

        if (!$user || !$user->is_admin) {
            abort(403, 'Anda tidak memiliki akses.');
        }

        return $next($request);
    }
}


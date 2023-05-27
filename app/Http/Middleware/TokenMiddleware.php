<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TokenMiddleware
{
	public function handle(
		Request $request,
		Closure $next,
		string $token,
		string $foo
	): Response {
		if ($request->input('token') === $token) {
			return $next($request);
		}

		abort(403);
	}
}

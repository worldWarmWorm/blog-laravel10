<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
	public function handle(Request $request, Closure $next): Response
	{
		if ($this->isAdmin($request)) {
			return $next($request);
		}

		abort(403);
	}

	protected function isAdmin(Request $request): bool
	{
		return true;
	}
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ActiveMiddleware
{
	public function handle(Request $request, Closure $next): Response
	{
		if ($this->isActive($request)) {
			return $next($request);
		}

		abort(403);
	}

	protected function isActive(Request $request): bool
	{
		return false;
	}
}

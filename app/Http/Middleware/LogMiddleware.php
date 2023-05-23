<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LogMiddleware
{
	public function handle(Request $request, Closure $next): Response
	{
		info('request', ['foo' => 'bar']);

		return $next($request);
	}
}

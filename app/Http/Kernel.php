<?php

namespace App\Http;

use App\Http\Middleware\{ActiveMiddleware, AdminMiddleware, Authenticate, EncryptCookies, PreventRequestsDuringMaintenance, RedirectIfAuthenticated, TokenMiddleware, TrimStrings, TrustProxies, ValidateSignature, VerifyCsrfToken};
use App\Http\Controllers\TestController;
use Illuminate\Auth\Middleware\{AuthenticateWithBasicAuth, Authorize, EnsureEmailIsVerified, RequirePassword};
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Foundation\Http\Kernel as HttpKernel;
use Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull;
use Illuminate\Foundation\Http\Middleware\ValidatePostSize;
use Illuminate\Http\Middleware\{HandleCors, SetCacheHeaders};
use Illuminate\Routing\Middleware\{SubstituteBindings, ThrottleRequests,};
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Illuminate\Session\Middleware\{AuthenticateSession, StartSession};

class Kernel extends HttpKernel
{
	/**
	 * The application's global HTTP middleware stack.
	 * These middleware are run during every request to your application.
	 * @var array<int, class-string|string>
	 */
	protected $middleware = [
		// \App\Http\Middleware\TrustHosts::class,
		TrustProxies::class,
		HandleCors::class,
		PreventRequestsDuringMaintenance::class,
		ValidatePostSize::class,
		TrimStrings::class,
		ConvertEmptyStringsToNull::class,
	];

	/**
	 * The application's route middleware groups.
	 * @var array<string, array<int, class-string|string>>
	 */
	protected $middlewareGroups = [
		'web' => [
			EncryptCookies::class,
			AddQueuedCookiesToResponse::class,
			StartSession::class,
			ShareErrorsFromSession::class,
			VerifyCsrfToken::class,
			SubstituteBindings::class,
		],

		'api' => [
			// \Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,
			ThrottleRequests::class . ':api',
			SubstituteBindings::class,
		],
	];

	/**
	 * The application's middleware aliases.
	 * Aliases may be used instead of class names to conveniently assign middleware to routes and groups.
	 * @var array<string, class-string|string>
	 */
	protected $middlewareAliases = [
		'auth' => Authenticate::class,
		'auth.basic' => AuthenticateWithBasicAuth::class,
		'auth.session' => AuthenticateSession::class,
		'cache.headers' => SetCacheHeaders::class,
		'can' => Authorize::class,
		'guest' => RedirectIfAuthenticated::class,
		'password.confirm' => RequirePassword::class,
		'signed' => ValidateSignature::class,
		'throttle' => ThrottleRequests::class,
		'verified' => EnsureEmailIsVerified::class,
		'active' => ActiveMiddleware::class,
		'admin' => AdminMiddleware::class,
		'token' => TokenMiddleware::class,
	];
}

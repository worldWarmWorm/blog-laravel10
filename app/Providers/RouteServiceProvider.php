<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
	/**
	 * The path to your application's "home" route.
	 * Typically, users are redirected here after authentication.
	 * @var string
	 */
	public const HOME = '/home';

	/**
	 * Define your route model bindings, pattern filters, and other route configuration.
	 */
	public function boot(): void
	{
		RateLimiter::for(
			'api',
			static fn(Request $request) => Limit::perMinute(60)->by(
				$request->user()?->id
					?: $request->ip()
			)
		);

		RateLimiter::for(
			'test',
			static fn(Request $request) => Limit::perMinute(5)->by($request->ip())
		);

		$this->routes(
			function () {
				Route::middleware('api')
					->prefix('api')
					->group(base_path('routes/api.php'));

				Route::middleware('web')
					->group(
						static function () {
							require_once base_path('routes/main.php');
							require_once base_path('routes/auth.php');
							require_once base_path('routes/admin.php');
							require_once base_path('routes/user.php');
						}
					);
			}
		);
	}
}

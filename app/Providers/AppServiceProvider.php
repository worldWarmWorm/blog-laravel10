<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
	public function register(): void
	{
		//
	}

	public function boot(): void
	{
		View::share('year', date('Y'));
//		View::composer('blog*', static function (\Illuminate\View\View $view) {
//			$view->with('balance', 4000);
//		});
	}
}

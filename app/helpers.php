<?php

use Illuminate\Support\Facades\Route;

if (! function_exists('activeLink')) {
	function activeLink(string $link, string $cssClass = ' active'): string
	{
		return Route::is($link) ? $cssClass : '';
	}
}

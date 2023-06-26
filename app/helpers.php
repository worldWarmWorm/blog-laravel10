<?php

use Illuminate\Support\Facades\Route;

if (! function_exists('activeLink')) {
	function activeLink(string $link, string $cssClass = ' active'): string
	{
		return Route::is($link) ? $cssClass : '';
	}
}

if (! function_exists('alert')) {
	function alert(string $message, string $type = 'success'): void
	{
		session([
			'alert' => $message,
			'type' => $type
		]);
	}
}

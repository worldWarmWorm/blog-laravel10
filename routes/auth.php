<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
	Route::get('register',  [RegisterController::class, 'index'])->name('register');

	Route::post('register', [RegisterController::class, 'store'])->name('register.store');

	Route::get('login', [LoginController::class, 'index'])->name('login');

	Route::post('login', [LoginController::class, 'store'])->name('login.store');

	Route::get('login/{user}/confirmation', [LoginController::class, 'confirmation'])->name('login.confirmation');

//	Route::post('login/{user}/confirm', [LoginController::class, 'confirm'])
//		->name('login.confirm')
//		->withoutMiddleware('guest');
});

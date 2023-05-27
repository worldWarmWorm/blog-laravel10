<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\Posts\CommentController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home.index')->name('home');
Route::redirect('/home', '/')->name('home.redirect');

Route::get('blog', [BlogController::class, 'index'])->name('blog');
Route::get('blog/{post}', [BlogController::class, 'show'])->name('blog.show');
Route::post('blog/{post}/like', [BlogController::class, 'like'])->name('blog.show.like');

Route::resource('posts/{post}/comments', CommentController::class)->only(['index', 'show']);



//Route::fallback(static fn() => 'Error 404');

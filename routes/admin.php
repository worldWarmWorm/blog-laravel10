<?php

use App\Http\Controllers\Admin\PostController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware('auth')->group(static function() {
	Route::redirect('admin', 'admin/posts')->name('admin');
	Route::get('posts', [PostController::class, 'index'])->name('user.posts');
	Route::get('posts/create', [PostController::class, 'create'])->name('user.posts.create');
	Route::post('posts', [PostController::class, 'store'])->name('user.posts.store');
	Route::get('posts/{post}', [PostController::class, 'show'])->name('user.posts.show');
	Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('user.posts.edit');
	Route::put('posts/{post}', [PostController::class, 'update'])->name('user.posts.update');
	Route::delete('posts/{post}', [PostController::class, 'delete'])->name('user.posts.delete');
	Route::put('posts/{post}/like', [PostController::class, 'like'])->name('user.posts.like');
});

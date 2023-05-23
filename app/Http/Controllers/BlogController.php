<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
	public function index(): string
	{
		return "Страница блога";
	}

	public function show($postId): string
	{
		return "Станица поста $postId";
	}

	public function like($postId)
	{
		return "Лайк + 1 для поста $postId";
	}
}

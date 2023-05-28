<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class BlogController extends Controller
{
	public function index(): View
	{
		$post = (object)[
			'id' => 123,
			'title' => 'Заголовок поста',
			'content' => 'Текст поста <strong>текущего дня</strong>'
		];

		$posts = array_fill(0, 10, $post);

		return view('blog.index', compact('posts'));
	}

	public function show($postId): View
	{
		$post = (object)[
			'id' => 123,
			'title' => 'Заголовок поста',
			'content' => 'Текст поста <strong>текущего дня</strong>'
		];

		return view('blog.show', compact('post'));
	}

	public function like($postId)
	{
		return "Лайк + 1 для поста $postId";
	}
}

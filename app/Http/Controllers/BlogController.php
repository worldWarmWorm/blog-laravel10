<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
{
	public function index(Request $request): View
	{
		$categories = [
			null => __('Все категории'),
			1 => __('Первая категория'),
			2 => __('Вторая категория')
		];

		$posts = Post::query()->paginate(6, ['id', 'title', 'published_at']);


		return view('blog.index', compact('posts', 'categories'));
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

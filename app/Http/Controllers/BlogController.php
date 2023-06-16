<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
{
	public function index(Request $request): View
	{
		$search = $request->input('search');
		$categoryId = $request->input('category_id');

		$post = (object)[
			'id' => 123,
			'title' => 'Заголовок поста',
			'content' => 'Текст поста <strong>текущего дня</strong>',
			'category_id' => 1
		];

		$posts = array_fill(0, 10, $post);

		$posts = array_filter(
			$posts,
			static function (object $post) use ($search, $categoryId) {
				if ($search && ! str_contains(strtolower($post->title), strtolower($search))) {
					return false;
				}

				if ($categoryId && $categoryId != $post->category_id) {
					return false;
				}

				return true;
			}
		);

		$categories = [
			null => __('Все категории'),
			1 => __('Первая категория'),
			2 => __('Вторая категория')
		];

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

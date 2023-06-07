<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
	public function index(): View
	{
		$post = (object)[
			'id' => 123,
			'title' => 'Заголовок поста',
			'content' => 'Текст поста <strong>текущего дня</strong>'
		];

		$posts = array_fill(0, 10, $post);

		return view('user.posts.index', compact('posts'));
	}

	public function create(): View
	{
		return view('user.posts.create');
	}

	public function store(Request $request)
	{
		$postTitle = $request->input('title');
		$postContent = $request->input('content');

		dd(
			$postTitle,
			$postContent
		);

		return 'Запрос сохранения поста';
	}

	public function show($post): View
	{
		$post = (object)[
			'id' => 123,
			'title' => 'Заголовок поста',
			'content' => 'Текст поста <strong>текущего дня</strong>'
		];

		return view('user.posts.show', compact('post'));
	}

	public function edit($post): View
	{
		$post = (object)[
			'id' => 123,
			'title' => 'Заголовок поста',
			'content' => 'Текст поста <strong>текущего дня</strong>'
		];

		return view('user.posts.edit', compact('post'));
	}

	public function update(Request $request)
	{
		$postTitle = $request->input('title');
		$postContent = $request->input('content');

		dd(
			$postTitle,
			$postContent
		);

		return "Запрос изменения поста";
	}

	public function delete($id): string
	{
		return "Запрос удаления поста $id";
	}

	public function like($id): string
	{
		return "Лайк + 1 для поста $id";
	}
}

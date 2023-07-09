<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;
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
		$validated = $request->validate([
			'title' => ['required', 'string', 'max:100'],
			'content' => ['required', 'string', 'max:1000'],
			'published_at' => ['nullable', 'string', 'date'],
			'published' => ['nullable', 'boolean'],
		]);

		$post = Post::query()->create([
			'user_id' => User::query()->value('id'),
			'title' => $validated['title'],
			'content' => $validated['content'],
			'published_at' => new Carbon($validated['published_at'] ?? null),
			'published' => $validated['published'] ?? false,
		]);

		alert('Пост успешно сохранён!');

		return redirect()->route('user.posts.show', 1);
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

	public function update(Request $request, int $postId)
	{
		$validated = validate($request->all(), [
				'title' => ['required', 'string', 'max:100'],
				'content' => ['required', 'string']
			]
		);

		dd($validated);

		alert(__('Пост успешно обновлён!'));

		return redirect()->back();
	}

	public function delete(int $postId)
	{
		return redirect()->route('user.posts');
	}

	public function like($id): string
	{
		return "Лайк + 1 для поста $id";
	}
}

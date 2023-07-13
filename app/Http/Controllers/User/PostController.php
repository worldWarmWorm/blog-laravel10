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
		$posts = Post::query()
			->latest('published_at')
			->paginate(6);

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
			'published_at' => (new Carbon($validated['published_at']))->format('d.m.Y H:i:s'),
			'published' => $validated['published'] ?? false,
		]);

		alert('Пост успешно сохранён!');

		return redirect()->route('user.posts.show', $post->id);
	}

	public function show($postId): View
	{
		$post = Post::query()->find($postId);

		return view('user.posts.show', compact('post'));
	}

	public function edit($postId): View
	{
		$post = Post::query()->findOrFail($postId);

		return view('user.posts.edit', compact('post'));
	}

	public function update(Request $request, int $postId)
	{
		$validated = $request->validate([
				'title' => ['required', 'string', 'max:100'],
				'content' => ['required', 'string', 'max:1000'],
				'published_at' => ['nullable', 'string', 'date'],
				'published' => ['nullable', 'boolean'],
			]
		);

		$post = Post::query()->findOrFail($postId);
		$post->update([
			'user_id' => User::query()->value('id'),
			'title' => $validated['title'],
			'content' => $validated['content'],
			'published_at' => (new Carbon($validated['published_at']))->format('d.m.Y H:i:s'),
			'published' => $validated['published'] ?? false,
		]);

		alert(__('Пост успешно обновлён!'));

		return view('user.posts.show', compact('post'));
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

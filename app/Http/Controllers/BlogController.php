<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
{
	public function index(Request $request): View
	{
		$validated = $request->validate([
			'search' => ['nullable', 'string', 'max:50'],
			'from_date' => ['nullable', 'string', 'date'],
			'to_date' => ['nullable', 'string', 'date', 'after:from_date'],
		]);

		$search = $validated['search'] ?? null;
		$fromDate = $validated['from_date'] ?? null;
		$toDate = $validated['to_date'] ?? null;
		$query = Post::query();

		if (!empty($search)) {
			$query->where('title', 'like', "%{$search}%");
		}

		if (!empty($fromDate)) {
			$query->where('published_at', '>=', new Carbon($fromDate));
		}

		if (!empty($toDate)) {
			$query->where('published_at', '<=', new Carbon($toDate));
		}


		$posts = $query
			->where('published', true)
			->where('published_at', '<=', now()->format('Y-m-d H:i:s'))
			->latest('published_at')
			->paginate(1, ['id', 'title', 'published_at']);

		return view('blog.index', compact('posts'));
	}

	public function show($postId): View
	{
		$post = cache()->remember(
			key: "posts.{$postId}",
			ttl: now()->addHour(),
			callback: fn() => Post::query()->findOrFail($postId)
		);

		return view('blog.show', compact('post'));
	}

	public function like($postId)
	{
		return "Лайк + 1 для поста $postId";
	}
}

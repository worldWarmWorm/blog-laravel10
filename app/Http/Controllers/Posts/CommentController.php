<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentController extends Controller
{
	public function index()
	{
		//
	}

	public function create()
	{
		//
	}

	public function store(Request $request)
	{
		//
	}

	public function show(string $id)
	{
		//
	}

	public function edit(string $postId, string $commentId)
	{
		return "Изменить комментарий $commentId (Пост $postId)";
	}

	public function update(Request $request, string $id)
	{
		//
	}

	public function destroy(string $id)
	{
		//
	}
}

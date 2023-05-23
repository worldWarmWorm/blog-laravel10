<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class PostController extends Controller
{
	public function index(): string
	{
		return 'Страница списка постов';
	}

	public function create(): string
	{
		return 'Страница создания поста';
	}

	public function store(): string
	{
		return 'Запрос сохранения поста';
	}

	public function show($id): string
	{
		return "Страница просмотра поста $id";
	}

	public function edit($id): string
	{
		return "Страница изменения поста $id";
	}

	public function update($id): string
	{
		return "Запрос изменения поста $id";
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class RegisterController extends Controller
{
	public function index(): View
	{
		return view('register.index');
	}

	public function store(Request $request): string
	{
		//			$data = $request->all();
		//			$data = $request->only(['name']);
		//			$data = $request->except(['email']);

		//			$name = $request->input('name');
		//			$agreement = $request->boolean('agreement');
		//			$avatar = $request->file('avatar');

		//			$hasName = $request->has('name');
		//			$isFilled = $request->filled('name');
		//			$isMissing = $request->missing('name');

		$name = $request->input('name');
		$email = $request->input('email');
		$password = $request->input('password');
		$passwordConfirmation = $request->input('password_confirmation');
		$agreement = $request->boolean('agreement');

		dd(
			$name,
			$email,
			$password,
			$passwordConfirmation,
			$agreement
		);

		return 'Регистрация';
	}
}

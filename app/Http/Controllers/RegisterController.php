<?php

namespace App\Http\Controllers;

use App\Models\User;
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
		$validated = $request->validate([
			'name' => ['required', 'string', 'max:50'],
			'email' => ['required', 'string', 'max:50', 'email', 'unique:users'],
			'password' => ['required', 'string', 'min:8', 'max:50', 'confirmed'],
			'agreement' => ['accepted'],
		]);

		$user = User::query()->create([
			'name' => $validated['name'],
			'email' => $validated['email'],
			'password' => bcrypt($validated['password']),
		]);

		return redirect()->route('user');
	}
}

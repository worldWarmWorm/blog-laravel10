<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function index(): View
    {
			return view('login.index');
    }

		public function store(Request $request): string
		{
			$email = $request->input('email');
			$password = $request->input('password');
			$agreement = $request->boolean('agreement');

			dd(
				$email,
				$password,
				$agreement
			);

			return 'Логин';
		}
}

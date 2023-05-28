<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class RegisterController extends Controller
{
    public function index(): View
    {
			return view('register.index');
    }

		public function store(): string
		{
			return 'Регистрация';
		}
}

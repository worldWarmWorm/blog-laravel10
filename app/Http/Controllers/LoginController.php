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

			alert(__('Добро пожаловать!'));

//			if (true) {
//				return redirect()->back()->withInput();
//			}

			return redirect()->route('user');
		}
}

<?php

namespace App\Http\Controllers;

use App\Rules\Phone;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class ValidationController extends Controller
{
	public function store(Request $request): void
	{
		$validated = $request->validate(
			[
				'first_name' => ['required', 'string', 'max:50'], // Valera
				'last_name' => ['nullable', 'string', 'max:50'], // Davydkin
				'age' => ['nullable', 'integer', 'min:18', 'max:100'], // 31
				'amount' => ['nullable', 'numeric', 'min:1', 'max:9999999'], // 100.99
				'gender' => ['nullable', 'string', 'in:male,female'],
				'zip' => ['required', 'digits:6'], // 630000
				'subscription' => ['nullable', 'boolean'], // true,false,0,1
				'agreement' => ['accepted'], // true,1,yes
//				'password' => ['required', 'string', 'min:7', 'max:50', 'confirmed'], // password_confirmation
				'password' => ['required', 'string', Password::min(8)->letters()->mixedCase()->numbers()->symbols(), 'confirmed'], // password_confirmation
				'current_password' => ['required', 'string', 'current_password'], // current password
				'email' => ['required', 'string', 'max:100', 'email', 'exists:users,email'], // mail@example.com
//				'country_id' => ['required', 'integer', 'exists:countries,id'],
				'country_id' => ['required', 'integer', Rule::exists('countries', 'id')->where('active', true)],
//				'phone' => ['required', 'string', 'unique:users,phone'], // Такаого телефона еще нет в базе
				'phone' => ['required', 'string', new Phone, Rule::unique('users', 'phone')->ignore(123)],
				'website' => ['nullable', 'string', 'uri'], // http://site.com
				'uuid' => ['nullable', 'string', 'uuid'], // sdfsdf-sdfsdf-sdfsdf-sdfsdf
				'ip' => ['nullable', 'string', 'ip'], // 127.0.0.1,
				'avatar' => ['required', 'file', 'image', 'max:1024'], // 1Mb
				'birth_date' => ['nullable', 'string', 'date'], // 1992-03-18/18-03-1992 12:00:00
				'start_date' => ['required', 'string', 'date', 'after_or_equal:today'],
				'finish_date' => ['required', 'string', 'date', 'after:start_date'],
				'services' => ['nullable', 'array', 'min:1', 'max:10'], // [1,2,3,4,5]
				'services.*' => ['required', 'integer'], // [1,2,3,4,5]
				'delivery' => ['required', 'array', 'size:2'], // ['date' => '10-09-2023', 'time' => '11:30:00']
				'delivery.date' => ['required', 'string', 'date_format:Y.m.d'], // 2023-10-23
				'delivery.time' => ['required', 'string', 'date_format:H:i:s'], // 11:30:00
				'secret' => ['required', 'string', static function($attribute, $value, \Closure $fail) {
					if ($value !== config('example.secret')) {
						$fail(__('Неверный секретный ключ'));
					}
				}],
			]
		);

		dd($validated);
	}
}

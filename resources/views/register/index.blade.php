@extends('layouts.auth')

@section('page.title', 'Регистрация')

@section('auth.content')
	<x-card>
		<x-card-header>
			<x-card-title>
				{{ __('Регистрация') }}
			</x-card-title>
			<x-slot name="right">
				<a href="{{ route('login') }}">
					{{ __('Войти') }}
				</a>
			</x-slot>
		</x-card-header>

		<x-card-body>
			<x-form action="{{ route('register.store') }}" method="POST">
				<div class="row">
					<x-form-item>
						<x-label required>{{ __('Имя') }}</x-label>
						<x-input name="name" autofocus />
					</x-form-item>
					<x-form-item>
						<x-label required>{{ __('E-mail') }}</x-label>
						<x-input name="email" type="email" />
					</x-form-item>
					<x-form-item>
						<x-label required>{{ __('Пароль') }}</x-label>
						<x-input name="password" type="password" />
					</x-form-item>
					<x-form-item>
						<x-label required>{{ __('Пароль ещё раз') }}</x-label>
						<x-input name="password_confirmation" type="password" />
					</x-form-item>
					<x-form-item>
						<x-checkbox name="agreement">
							{{ __('Я согласен на обработку пользовательских данных') }}
						</x-checkbox>
					</x-form-item>
					<x-form-item>
						<x-button type="submit">
							{{ __('Регистрация') }}
						</x-button>
					</x-form-item>
				</div>
			</x-form>
		</x-card-body>
	</x-card>
@endsection

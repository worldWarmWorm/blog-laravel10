@extends('layouts.auth')

@section('page.title', 'Вход')

@section('auth.content')
	<x-card>
		<x-card-header>
			<x-card-title>
				{{ __('Вход') }}
			</x-card-title>
		</x-card-header>

		<x-card-body>
			<x-form action="{{ route('login.store') }}" method="POST">
				<div class="row">
					<x-card-item>
						<x-label required>{{ __('E-mail') }}</x-label>
						<x-input type="email" name="email" autofocus/>
					</x-card-item>
					<x-card-item>
						<x-label required>{{ __('Пароль') }}</x-label>
						<x-input name="password" type="password"/>
					</x-card-item>
					<x-card-item>
						<x-checkbox name="remember">
							{{ __('Запомнить меня') }}
						</x-checkbox>
					</x-card-item>
					<x-button type="submit">
						{{ __('Войти') }}
					</x-button>
				</div>
			</x-form>
		</x-card-body>
	</x-card>
@endsection

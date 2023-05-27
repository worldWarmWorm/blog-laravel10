@extends('layouts.auth')

@section('page.title', 'Регистрация')

@section('auth.content')
	<x-card>
		<x-card-header>
			<x-card-title>
				{{ __('Регистрация') }}
			</x-card-title>
		</x-card-header>

		<x-card-body>
			<x-form action="{{ route('register.store') }}" method="POST">
				<div class="row">
					<x-card-item>
						<x-label required>{{ __('Имя') }}</x-label>
						<x-input name="name" autofocus/>
					</x-card-item>
					<x-card-item>
						<x-label required>{{ __('E-mail') }}</x-label>
						<x-input type="email" name="email"/>
					</x-card-item>
					<x-card-item>
						<x-label required>{{ __('Пароль') }}</x-label>
						<x-input name="password" type="password"/>
					</x-card-item>
					<x-card-item>
						<x-label required>{{ __('Пароль ещё раз') }}</x-label>
						<x-input name="password" type="password_confirmation"/>
					</x-card-item>
					<x-card-item>
						<x-checkbox name="agreement">
							{{ __('Я согласен на обработку пользовательских данных') }}
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

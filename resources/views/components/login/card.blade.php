<x-card>
	<x-card-header>
		<x-card-title>
			{{ __('Вход') }}
		</x-card-title>

		<x-slot name="right">
			<a href="{{ route('register') }}">
				{{ __('Регистрация') }}
			</a>
		</x-slot>
	</x-card-header>

	<x-card-body>
		<x-form action="{{ route('login.store') }}" method="POST">
			<div class="row">
				<x-form-item>
					<x-label required>{{ __('E-mail') }}</x-label>
					<x-input type="email" name="email" autofocus/>
				</x-form-item>
				<x-form-item>
					<x-label required>{{ __('Пароль') }}</x-label>
					<x-input name="password" type="password"/>
				</x-form-item>
				<x-form-item>
					<x-checkbox name="remember">
						{{ __('Запомнить меня') }}
					</x-checkbox>
				</x-form-item>
				<x-button type="submit">
					{{ __('Войти') }}
				</x-button>
			</div>
		</x-form>
	</x-card-body>
</x-card>

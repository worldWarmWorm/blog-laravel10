<nav class="navbar navbar-expand-md navbar-light bg-light">
	<div class="container">
		<a href="{{ route('home') }}" class="navbar-brand">
			{{ config('app.name') }}
		</a>

		<button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarCollapse">
			<ul class="navbar-nav me-auto mb-2 mb-md-0">
				<li class="nav-item">
					<a href="{{ route('home') }}" class="nav-link{{ activeLink('home') }}" aria-current="page">
						{{ __('Главная') }}
					</a>
				</li>
				<li class="nav-item">
					<a href="{{ route('blog') }}" class="nav-link{{ activeLink('blog*') }}" aria-current="page">
						{{ __('Блог') }}
					</a>
				</li>
			</ul>
			<ul class="navbar-nav ms-auto mb-2 mb-md-0">
				<li class="nav-item">
					<a href="{{ route('register') }}" class="nav-link{{ activeLink('register') }}">
						{{ __('Регистрация') }}
					</a>
				</li>
				<li class="nav-item">
					<a href="{{ route('login') }}" class="nav-link{{ activeLink('login') }}">
						{{ __('Вход') }}
					</a>
				</li>
			</ul>
		</div>
	</div>
</nav>

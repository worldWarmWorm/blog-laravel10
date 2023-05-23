<header class="py-3 border-bottom">
	<div class="d-flex justify-content-between">
		<div>
			<a href="{{ route('home') }}">
				{{ config('app.name') }}
			</a>
		</div>
		<div>
			<nav>
				<ul class="list-unstyled d-flex">
					<li class="ms-3">
						<a href="{{ route('register') }}">Регистрация</a>
					</li>
					<li class="ms-3">
						<a href="{{ route('login') }}">Вход</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
	Шапка
</header>

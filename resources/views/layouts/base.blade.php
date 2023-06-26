<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
				content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>@yield('page.title', config('app.name'))</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/css/bootstrap.min.css">
	@stack('css')
	<style>
		*,
		*::before,
		*::after {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		textarea {
			resize: none;
		}

		.required:after {
			content: '*';
			color: red;
			margin-left: 3px;
		}
	</style>
</head>
<body>
<div class="d-flex flex-column justify-content-between min-vh-100">
	@include('includes.alert')
	@include('includes.header')
	<main class="flex-grow-1 py-3">
		@yield('content')
	</main>
	@include('includes.footer')
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/js/bootstrap.min.js"></script>
@stack('js')
</body>
</html>

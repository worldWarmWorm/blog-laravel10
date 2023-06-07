@props(['method' => 'GET'])

@php($method = strtoupper($method))
@php($isHtmlMethod = in_array($method, ['GET', 'POST']))

<form {{ $attributes }} method="{{ $isHtmlMethod ? $method : 'POST' }}">
	@unless($isHtmlMethod)
		@method($method)
	@endunless

	@csrf
	{{ $slot }}
</form>

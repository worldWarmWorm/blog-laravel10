@props(['method' => 'GET'])

@php($method = strtoupper($method))
@php($isHtmlMethod = in_array($method, ['GET', 'POST']))

<form {{ $attributes }} method="{{ $isHtmlMethod ? $method : 'POST' }}">
	@unless($isHtmlMethod)
		@method($method)
	@endunless

	@unless($method === 'GET')
		@csrf
	@endunless

	{{ $slot }}
</form>

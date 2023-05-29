<input type="hidden" {{ $attributes }} id="{{ $name }}">
<trix-editor input="{{ $name }}"></trix-editor>

@once
	@push('css')
		<link rel="stylesheet" href="/css/trix.min.css">
	@endpush

	@push('js')
		<script src="/js/trix.min.js"></script>
	@endpush
@endonce

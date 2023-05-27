@props([
	'color' => 'primary',
	'size' => ''
])

<div class="col-12">
	<button {{ $attributes->class([
		"btn btn-{$color}",
		(!empty($size)) ? "btn-{$size}" : ''
	])
	->merge([
		'type' => 'button'
	]) }} >
		{{ $slot }}
	</button>
</div>

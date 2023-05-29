@props([
	'color' => 'primary',
	'size' => ''
])

<button {{ $attributes->class([
	"btn btn-{$color}",
	(!empty($size)) ? "btn-{$size}" : ''
])
->merge([
	'type' => 'button'
]) }} >
	{{ $slot }}
</button>

@props([
	'categoryId' => null,
	'options' => []
])

<select {{ $attributes->class([
	'form-control'
]) }}>
	@foreach($options as $key => $option)
		<option value="{{ $key }}" {{ $key == $categoryId ? 'selected' : '' }}>
			{{ $option }}
		</option>
	@endforeach
</select>

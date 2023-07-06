@props(['post' => null])

<x-form {{ $attributes }}>
	<x-form-item>
		<x-label required>
			{{ __('Название поста') }}
		</x-label>
		<x-input name="title" autofocus />
	</x-form-item>

	<x-form-item>
		<x-label required>
			{{ __('Содержание поста') }}
		</x-label>
		<x-trix name="content" value="{{ $post->content ?? '' }}" />
	</x-form-item>

	<x-form-item>
		{{ $slot }}
	</x-form-item>
</x-form>



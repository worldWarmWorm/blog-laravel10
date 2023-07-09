@props(['post' => null])

<x-form {{ $attributes }}>
	<x-form-item>
		<x-label required>
			{{ __('Название поста') }}
		</x-label>
		<x-input name="title" autofocus />
		<x-error name="title"/>
	</x-form-item>

	<x-form-item>
		<x-label required>
			{{ __('Содержание поста') }}
		</x-label>
		<x-trix name="content" value="{{ $post->content ?? '' }}" />
		<x-error name="content"/>
	</x-form-item>

	<x-form-item>
		<x-label>
			{{ __('Дата публикации') }}
		</x-label>
		<x-input type="date" name="published_at" placeholder="Заполните дату публикации" />
		<x-error name="published_at"/>
	</x-form-item>

	<x-form-item>
		<x-checkbox name="published">
			Опубликовано
		</x-checkbox>
	</x-form-item>

	<x-form-item>
		{{ $slot }}
	</x-form-item>
</x-form>



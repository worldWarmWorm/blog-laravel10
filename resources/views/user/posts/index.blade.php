@extends('layouts.page')

@section('page.title', 'Мои посты')

@section('page.content')
	<x-title>
		{{ __('Мои посты') }}

		<x-slot name="right">
			<x-button-link href="{{ route('user.posts.create') }}" class="btn btn-primary btn-sm">
				{{ __('Создать') }}
			</x-button-link>
		</x-slot>
	</x-title>
	<div>
		@if(empty($posts))
			{{ __('Нет постов') }}
		@else
			@foreach($posts as $post)
				<div class="mb-5">
					<h2 class="h5 mb-3">
						<a href="{{ route('user.posts.show', $post->id) }}">
							{{ $post->title }}
						</a>
					</h2>

					<div class="small text-muted">
						{{ now()->format('d.m.Y H:i:s') }}
					</div>
				</div>
			@endforeach
		@endif
	</div>
@endsection

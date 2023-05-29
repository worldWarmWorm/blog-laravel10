@extends('layouts.page')

@section('page.title', 'Просмотр поста')

@section('page.content')
	<x-title>
		{{ __('Просмотр поста') }}

		<x-slot name="link">
			<a href="{{ route('user.posts') }}">
				{{ __('Назад') }}
			</a>
		</x-slot>

		<x-slot name="right">
			<a href="{{ route('user.posts.edit', $post->id) }}" class="btn btn-sm btn-primary">
				{{ __('Редактировать') }}
			</a>
		</x-slot>
	</x-title>
	<div>
		<h2 class="h5 mb-4">
			{{ $post->title }}
		</h2>

		<div class="mb-3">
			{!! $post->content !!}
		</div>

		<div class="small text-muted">
			{{ now()->format('d.m.Y H:i:s') }}
		</div>
	</div>
@endsection

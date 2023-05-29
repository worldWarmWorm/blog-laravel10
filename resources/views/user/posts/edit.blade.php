@extends('layouts.page')

@section('page.title', 'Редактировать пост')

@section('page.content')
	<x-title>
		{{ __('Редактировать пост') }}
		<x-slot name="link">
			<a href="{{ route('user.posts.show', $post->id) }}">
				{{ __('Назад') }}
			</a>
		</x-slot>
	</x-title>
	<x-post.form action="{{ route('user.posts.edit', $post->id) }}" :post="$post" />
@endsection

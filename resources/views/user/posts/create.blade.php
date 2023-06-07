@extends('layouts.page')

@section('page.title', 'Создать пост')

@section('page.content')
	<x-title>
		{{ __('Создать пост') }}

		<x-slot name="link">
			<a href="{{ route('user.posts') }}">
				{{ __('Назад') }}
			</a>
		</x-slot>
	</x-title>
	<x-post.form action="{{ route('user.posts.store') }}" method="post" />
@endsection

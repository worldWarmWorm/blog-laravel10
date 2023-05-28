@extends('layouts.page')

@section('page.title', $post->title)

@section('page.content')
	<x-title>
		<x-slot name="link">
			<a href="{{ route('blog') }}">
				{{ __('Назад') }}
			</a>
		</x-slot>
		{{ __($post->title) }}
	</x-title>
	{!! $post->content !!}
@endsection

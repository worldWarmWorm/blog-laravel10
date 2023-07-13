@extends('layouts.page')

@section('page.title', $post->title)

@section('page.content')
	<x-title>
		<x-slot name="link">
			<a href="{{ route('blog') }}">
				{{ __('Назад') }}
			</a>
		</x-slot>
		{{ __($post->title) }} ({{ $post->published_at->format('d.m.Y H:i:s') }})
	</x-title>
	{!! __($post->content) !!}
@endsection

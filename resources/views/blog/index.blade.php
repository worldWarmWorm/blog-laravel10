@extends('layouts.base')

@section('page.title', 'Список постов')

@section('content')
	<div class="container">
		<h1 class="mb-6">Список постов</h1>
		<div>
			@if(empty($posts))
				Нет постов
			@else
				@foreach($posts as $post)
					<h5>#{{ $post->id }} <a href="{{ route('blog.show', $post->id) }}" target="_blank">{{ $post->title }}</a></h5>
					<br>
					<p>{!! $post->content !!}</p>
					<p>{{ $balance }}</p>
				@endforeach
			@endif
		</div>
	</div>
@endsection

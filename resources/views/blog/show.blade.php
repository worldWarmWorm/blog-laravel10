@extends('layouts.base')

@section('page.title', "#$post->id $post->title")

@section('content')
	<h1>#{{ "$post->id $post->title" }}</h1>
	<p>{!! $post->content !!}</p>
	<a href="{{ route('blog') }}" class="btn btn-primary">Назад</a>
@endsection

@extends('layouts.page')

@section('page.title', 'Список постов')

@section('page.content')
	<x-title>
		{{ __('Список постов') }}
	</x-title>

	@include('blog.filter')

	<div>
		@if(empty($posts))
			{{ __('Нет постов') }}
		@else
			<div class="row">
				@foreach($posts as $post)
					<div class="col-12 col-md-4">
						<x-post.card :post="$post" />
					</div>
				@endforeach
			</div>
		@endif
	</div>
@endsection

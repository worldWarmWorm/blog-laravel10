@extends('layouts.page')

@section('page.title', 'Список постов')

@section('page.content')
	<x-title>
		{{ __('Список постов') }}
	</x-title>

	@include('blog.filter')

	<div>
		@if($posts->isEmpty())
			{{ __('Нет постов') }}
		@else
			<div class="row">
				@foreach($posts as $post)
					<div class="col-12 col-md-4">
						<x-post.card :post="$post" />
					</div>
				@endforeach
			</div>
			<div class="row">
				<div class="col-12">
					{{ $posts?->links() }}
				</div>
			</div>
		@endif
	</div>
@endsection

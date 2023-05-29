<div class="border-bottom mb-3 pb-3">
	@isset($link)
		<div class="mb-3">
			{{ $link }}
		</div>
	@endisset

	<div class="d-flex justify-content-between">
		<div>
			<h1 class="h2">
				{{ $slot }}
			</h1>
		</div>

		@isset($right)
			<div>
				{{ $right }}
			</div>
		@endisset
	</div>
</div>

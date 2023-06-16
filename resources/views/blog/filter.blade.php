<x-form action="{{ route('blog') }}">
	<div class="row">
		<div class="col-12 col-md-4">
			<div class="mb-3">
				<x-input name="search" placeholder="{{ __('Поиск') }}" value="{{ request('search') }}" />
			</div>
		</div>
		<div class="col-12 col-md-4">
			<div class="mb-3">
				<x-select
					name="category_id"
					:options="$categories"
					categoryId="{{ request('category_id') }}"
				/>
			</div>
		</div>
		<div class="col-12 col-md-4">
			<div class="mb-3">
				<x-button type="submit" class="w-100">
					{{ __('Применить') }}
				</x-button>
			</div>
		</div>
	</div>
</x-form>
